<?=require'views/partials/head.php';?>


<div class="container">

        <div class="form-group row">
            <div class="col-md-2">
                <label>Spel</label>
            </div>
            <div class="col-md-10">

                    <input type="text" readonly class="form-control-plaintext" value="<?=$titel?>" name="titel">


            </div>
        </div>


        <div class="form-group row">
            <div class="col-md-2">
                <label for="example-number-input">Hoeveelheid spelers</label>
            </div>
            <div class="col-10">
                <input type="text" readonly class="form-control-plaintext" value="<?=$nop?>" name="nop">
            </div>
        </div>



        <form method="post" action="/addplayertobattle">
            <input value="<?=$nop?>" name="nop" hidden>
            <input value="<?=$titel?>" name="titel" hidden>


            <div class="form-group row">
                <div class="col-md-2">
                    <label for="exampleInputEmail1">Speler toe voegen</label>
                </div>
                <div class="col-md-8">
                    <select id="inputState" class="form-control" required name="nickname">
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
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Voeg toe</button>
                </div>

            </div>
        </form>

    <div class="form-group row">
        <div class="col-md-2">
        <labe>Spelers:</labe>
        </div>
    </div>

    <form method='post' action='/deletebattleplayer'>
        <input value="<?=$nop?>" name="nop" hidden>
        <input value="<?=$titel?>" name="titel" hidden>

    <div class="form-group row">

                <?php
                foreach ($selection as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'Player') {
                            echo "<div class=\"col-md-2\"><input type=\"text\" readonly class=\"form-control-plaintext\" value=\"$value\" name=\"player\"></div>
                            <div class=\"col-md-3\">
                                <input class=\"form-control\" type=\"number\" value=\"\" min=\"\" max=\"\" id=\"example-number-input\">
                            </div>
                            <div class=\"col-md-7\"><button type='submit' class='btn btn-primary' name='playername' value='$items->Player'><i class=\"fa fa-times-circle \"></i></button></div>
                    ";
                        }
                    }
                }



                ?>
    </div>
    </form>


<form method='post' action='/finishbattle'>
    <input value="<?=$nop?>" name="nop" hidden>
    <input value="<?=$titel?>" name="titel" hidden>



                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="inputEmail4">Gewonnen door</label>
                    </div>
                    <div class="col-5">
                        <select id="inputState" class="form-control" name="winner" required>
                            <option value="" selected disabled>Selecteer gebruiker...</option>
                            <?php
                            foreach ($selection as $items) {
                                foreach ($items as $item => $value) {
                                    if ($item == 'Player') {
                                        echo "<option value=\"$value\">$value</option>";
                                    }



                                }
                            }



                            ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <input class="form-control" type="number" value="" min="" max="" id="example-number-input">
                    </div>
                    <div class="col-3"></div>
                </div>






</div>






        <div class="form-group row">
            <button type="submit" class="btn btn-primary">Sla battle op</button>
        </div>

</form>

</div>

<?=require'views/partials/foot.php';?>


