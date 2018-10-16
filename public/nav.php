<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">AvdL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if($current == 'home') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="home">Home </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'games') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="games">Games <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="games">Games </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'players') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="players">Players <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="players">Players </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'battles') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="battles">Battles <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="battles">Battles </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'leaderboard') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="leaderboard">Leaderboard <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="leaderboard">Leaderboard </a>
                </li>
            <?php endif; ?>


        </ul>

    </div>
</nav>

