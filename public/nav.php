<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

?>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">AvdL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if ($current == 'home') : $_SESSION['previous_uri'] = 'home'; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="home">Home </a>
                </li>
            <?php endif; ?>
            <?php if ($current == 'games') : $_SESSION['previous_uri'] = 'games'; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="games">Games <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="games">Games </a>
                </li>
            <?php endif; ?>
            <?php if ($current == 'players') : $_SESSION['previous_uri'] = 'players'; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="players">Players <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="players">Players </a>
                </li>
            <?php endif; ?>
            <?php if ($current == 'battles') : $_SESSION['previous_uri'] = 'battles'; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="battles">Battles <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="battles">Battles </a>
                </li>
            <?php endif; ?>
            <?php if ($current == 'leaderboard') : $_SESSION['previous_uri'] = 'leaderboard'; ?>
                <li class="nav-item active">
                    <a class="nav-link" href="leaderboard">Leaderboard <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="leaderboard">Leaderboard </a>
                </li>
            <?php endif; ?>
            <?php if ($_SESSION['functie'] == 'admin'): ?>
                <?php if ($current == 'berichten') : $_SESSION['previous_uri'] = 'berichten'; ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="berichten">Berichten <span class="sr-only">(current)</span></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="berichten">Berichten </a>
                    </li>

                <?php endif; ?>
            <?php endif; ?>

            <?php if ($_SESSION['functie'] == 'gebruiker'): ?>
                <?php if ($current == 'contact') : $_SESSION['previous_uri'] = 'contact'; ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact">Contact <span class="sr-only">(current)</span></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="contact">Contact </a>
                    </li>

                <?php endif; ?>
            <?php endif; ?>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="gamestatus" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?php if ($_SESSION["gamestatus"] == 0) {
                        echo "offline";
                    } else {
                        echo "online";
                    } ?> </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gamestatus">
                    <a class="dropdown-item" href="changestatus"><?php if ($_SESSION["gamestatus"] == 0) {
                            echo "online";
                        } else {
                            echo "offline";
                        } ?></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="gebruiker" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?= $_SESSION["nickname"] ?> </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gebruiker">
                    <a class="dropdown-item" href="account">Bekijk account</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="loguit">Log uit</a>
                </div>
            </li>
        </ul>


    </div>
</nav>






