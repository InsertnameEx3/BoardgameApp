<?= require 'views/partials/head.php'; ?>


<div class="container">

    <div class="row">
        <div class="col-md-2">
            <form action="gotostartbattle">
                <button class="btn btn-primary">Terug</button>
            </form>
        </div>
        <div class="col-md-10 ">
            <h4><?= $titel ?></h4>

        </div><!-- End div - battles -->

    </div>
    <hr>

    <div class="form-group row">
        <div class="col-md-2">
            <label>Spel</label>
        </div>
        <div class="col-md-10">
            <select id="inputState" class="form-control" required name="titel">
                <option value="" selected><?= $titel ?></option>
                <?php
                foreach ($games as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'name') {
                            echo "<option value=\"$value\">$value</option>";
                        }


                    }
                }


                ?>
            </select>
        </div>
    </div>


    <div class="form-group row">
        <div class="col-md-2">
            <label for="example-number-input">Hoeveelheid spelers</label>
        </div>
        <div class="col-4">
            <p class="form-control-static" id="example-number-input"><?= $nop ?></p>
        </div>
        <div class="col-md-2">
            <label for="example-number-input">Current:</label>
        </div>
        <div class="col-4">
            <p class="form-control-static" id="example-number-input"><?= $amountOfPlayers ?></p>
        </div>
    </div>


    <form method="post" action="addplayertobattle">
        <input value="<?= $nop ?>" name="nop" hidden>
        <input value="<?= $nopt ?>" name="nopt" hidden>
        <input value="<?= $amountOfPlayers ?>" name="aop" hidden>
        <input value="<?= $titel ?>" name="titel" hidden>


        <div class="form-group row">
            <div class="col-md-2">
                <label for="exampleInputEmail1">Speler toe voegen</label>
            </div>
            <div class="col-md-8">
                <select id="inputState" class="form-control <?php if ($errorAopt == true) {
                    echo "is-invalid";
                } ?> <?php if ($errorDuplicatePlayer == true) {
                    echo "is-invalid";
                } ?>" required name="nickname">
                    <option value="" selected disabled>Selecteer gebruiker...</option>
                    <?php


                    foreach ($players as $items) {
                        foreach ($items as $item => $value) {


                            if ($item == 'nickname') {
                                echo "<option value=\"$value\">$value</option>";
                            }
                        }
                    }


                    ?>

                </select>
                <?php if ($errorAopt == true) {
                    echo "
                    <div class=\"invalid-feedback\">Er zijn teveel spelers geselecteerd</div>";
                } elseif ($errorDuplicatePlayer == true) {
                    echo "
                     <div class=\"invalid-feedback\">Deze speler zit al in het spel</div>";
                } ?>


            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Voeg toe</button>
            </div>

        </div>
    </form>


    <form method='post' action='deletebattleplayer'>
        <input value="<?= $nop ?>" name="nop" hidden>
        <input value="<?= $amountOfPlayers ?>" name="aop" hidden>
        <input value="<?= $titel ?>" name="titel" hidden>


        <?php
        if (!empty($selection)) {
            echo "<table class=\"table table-hover\">
        <thead>
            <tr>
                <td>Spelers:</td>
                ";
            if ($score == '0') {
                echo "<td>Score:</td>";
            }
            echo "<td></td>
                    </tr>
        </thead>
        <tbody>";


            foreach ($selection as $items) {
                foreach ($items as $item => $value) {
                    if ($item == 'Player') {
                        echo "<tr><td><div class=\"col-md-2\"><input type=\"text\" readonly class=\"form-control-plaintext\" value=\"$value\" name=\"players[]\" form=\"finish\"></div></td>";
                        if ($score == '0') {
                            echo "<td>
                                <input class=\"form-control\" type=\"number\" value=\"\" min=\"\" max=\"\" name=\"scores[]\" id=\"example-number-input\" form=\"finish\" required>
                            </td>";
                        }
                        echo "
                            <td>
                            <div class=\"col-md-7\"><button type='submit' class='btn btn-primary' name='playername' value='$items->Player'><i class=\"fa fa-times-circle \"></i></button></div></td></tr>
                    ";
                    }
                }
            }
            echo "

    </tbody>
    </table>";
        }


        ?>
    </form>


    <form method='post' action='finishbattle' id="finish">
        <input value="<?= $nop ?>" name="nop" hidden>
        <input value="<?= $nopf ?>" name="nopf" hidden>
        <input value="<?= $amountOfPlayers ?>" name="aop" hidden>
        <input value="<?= $titel ?>" name="titel" hidden>
        <input value="<?= $score ?>" name="score" hidden>


        <?php if ($score == '1') {

            echo "
                <div class=\"form-group row\">
                    <div class=\"col-md-2\">
                        <label for=\"inputEmail4\">Gewonnen door</label>
                    </div>
                    <div class=\"col-5\">
                        <select id=\"inputState\" 
                        class=\"form-control " . ($errorAopf == true ? "is-invalid" : "") . " \" name='winner' required>
                            <option value=\"\" selected disabled>";
            if ($errorAopf == true) {
                echo $winner;
            } else {
                echo "Selecteer gebruiker...";
            }
            echo "</option>";

            foreach ($selection as $items) {
                foreach ($items as $item => $value) {
                    if ($item == 'Player') {
                        echo "<option value=\"$value\">$value</option>";
                    }


                }
            }


            echo "
                        </select>";
            if ($errorAopf == true) {
                echo "
                    <div class=\"invalid-feedback\">Er zijn niet genoeg spelers om het spel te eindigen</div>";
            }

            echo "</div>

                </div>
    ";
        } ?>


</div>


<div class="form-group row">
    <button type="submit" class="btn btn-primary">Sla battle op</button>
</div>

</form>

</div>

<?= require 'views/partials/foot.php'; ?>


