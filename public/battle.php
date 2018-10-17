<?=require'views/partials/head.php';?>
    <div class="container">
<form method="post" action="/selectgame">
    <div class="form-group row">
        <div class="col-md-2">
        <label>Spel</label>
        </div>
        <div class="col-md-10">
            <select id="inputState" class="form-control" required name="titel">
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
            <label for="example-number-input">Hoeveelheid spelers</label>
        </div>
        <div class="col-10">
            <input class="form-control" type="number" value="" min="" max="" id="example-number-input" name="nop">
        </div>
    </div>


    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Begin spel</button>
    </div>
</form>












        </div>




<?=require'views/partials/foot.php';?>


