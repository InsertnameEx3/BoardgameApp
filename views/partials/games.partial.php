


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="bg-primary text-white ">
                Welkom ADSD 2018!
            </div>
        </div> <!-- End div greeting -->
        <!-- Button to Open the Modal -->

        <hr>
        <div class="col-10 offset-1">


            <?php if($_SESSION['functie'] == 'admin'){
                echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                Voeg game toe
            </button>";
            }
            elseif ($_SESSION['functie'] == 'gebruiker'){
                echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">
                Suggereer een game
            </button>";
            }?>


            <?php
            require 'gamemodal.partial.php';
            ?>
            <h4>Games</h4>





            <table class="table table-hover">
                <tbody>
                <?php
                foreach ($results as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'name') {
                            echo    "<tr><td><form method='post' class='form-inline' action='/selectgame'><button type='submit' class='btn btn-primary' name='nopf' value='$items->nopf'><input value='$value' name='titel' style='display:none;'><input value='$items->nopt' name='nopt' style='display:none;'>Play game</button></form></td>" .
                                    "<td><a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" title=\"Omschrijving\" data-content=\"  $items->description \">
                                    " . $value . "</a></td>" . "<td>" . $items->nopf . "-" . $items->nopt . "</td><td>" . $items->dor .
                                    "</td>"?><?php if($_SESSION['functie'] == 'admin'){echo "<td><form method='post' class='form-inline' action='/removegame'><button type='submit' class='btn btn-primary' name='id' value='$items->id'><i class=\"fa fa-times-circle \"></i></button></form></td>";}echo "</tr>";
                        }
                    }
                }

                ?>
                </tbody>
            </table>
        </div><!-- End div - Games -->
        <hr>
        <div class="col-10 offset-1">

            <ul class="list-group list-group-flush">




        </div><!-- End div - class Player-->

        <div class="col-10 offset-1">
            <h4>Suggesties<span class="badge badge-primary"><?=count($suggestions)?></span></h4>





            <table class="table table-hover">
                <tbody>
                <?php
                foreach ($suggestions as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'name') {
                            echo    "<tr>" .
                                "<td><a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" title=\"Omschrijving\" data-content=\"  $items->description \">
                                    " . $value . "</a></td>" . "<td>" . $items->nopf . "-" . $items->nopt . "</td><td>" . $items->dor .
                                "</td>"?><?php if($_SESSION['functie'] == 'admin')
                                {echo "<td><form method='post' class='form-inline' action='/addsuggestion'>
                                        <button type='submit' class='btn btn-primary' name='id' value='$items->id'><i class=\"fa fa fa-plus \"></i></button></form></td>
                                        <td><form method='post' class='form-inline' action='/removegame'>
                                        <button type='submit' class='btn btn-primary' name='id' value='$items->id'><i class=\"fa fa-times-circle \"></i></button></form></td>";}echo "</tr>";
                        }
                    }
                }

                ?>
                </tbody>
            </table>
        </div><!-- End div - Games -->



    </div> <!-- End div row -->
</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>

