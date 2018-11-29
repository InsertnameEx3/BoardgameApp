<div class="container">

    <br>
    <form action="<?=$_SESSION['previous_uri']?>">
        <button class="btn btn-primary">Terug</button>
    </form>


    <form method="post" action="bericht">


        <?php
        foreach ($berichten as $items) {
            echo "
        <div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtEmail\">email adres</label>
                <input type=\"email\" readonly class=\"form-control col-md-6\" id=\"formEmail\" name=\"email\" value=\"$items->email\" required>
            </div>
        </div>
        <div class=\"form-group row\">
            <div class=\"col\">
                <label for=\"berichtEmail\">onderwerp</label>
                <input type=\"email\" readonly class=\"form-control col-md-9\" id=\"formEmail\" name=\"email\" value=\"$items->onderwerp\" required>
            </div>
        </div>
        <div class=\"form-group row\">
        <div class=\"col\">
            <label for=\"berichtBericht\">bericht</label>
            
            <textarea readonly class=\"form-control\" id=\"formBericht\" rows=\"4\" name=\"bericht\" required>$items->bericht</textarea>
             <span style='float:right'>$items->datum</span>
            </div>
        </div>";
        }
        ?>


    </form>
</div>