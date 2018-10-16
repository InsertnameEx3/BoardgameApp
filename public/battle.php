<?=require'views/partials/head.php';?>
    <div class="container">
<form>
    <div class="form-group row">
        <div class="col-md-2">
        <label>Spel</label>
        </div>
        <div class="col-md-10">
            <select id="inputState" class="form-control" required>
                <option value="" selected disabled>Selecteer spel...</option>
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
        <label for="example-number-input">Spelers</label>
        </div>
        <div class="col-10">
            <input class="form-control" type="number" value="" min="" max="" id="example-number-input">
        </div>
    </div>



    <div class="form-group row">
        <form method="post" action="/addplayertobattle">
            <div class="col-md-2">
        <label for="exampleInputEmail1">Spelernaam</label>
            </div>
            <div class="col-md-8">
                <select id="inputState" class="form-control" required>
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
        </form>
            </div>

    <ul class="list-group list-group-flush">
    <div class="form-group row">
        <div class="col-md-4"></div>
        <div class="col-md-4">


        <?php
        foreach ($battles as $items) {
            foreach ($items as $item => $value) {


                if ($item == 'playerid01') {
                    echo $value;

                }
            }
        }

        ?>


        </div>
        <div class="col-md-4"></div>
    </div>
    </ul>

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="inputEmail4">Gewonnen door</label>
                </div>
                    <div class="col-5">
                        <select id="inputState" class="form-control" required>
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
                <div class="col-3">
                    <input class="form-control" type="number" value="" min="" max="" id="example-number-input">
                </div>
                </div>



<div class="form-group row">
<button type="submit" class="btn btn-primary">Sla battle op</button>
</div>
</form>
    </div>

<?=require'views/partials/foot.php';?>


