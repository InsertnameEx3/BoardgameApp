<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="bg-primary text-white ">
                Welkom ADSD 2018!
            </div>
        </div> <!-- End div greeting -->
        <hr>
        <div class="col-10 offset-1">
            <h4>Games</h4>


            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Voeg game toe
            </button>

            <?php
            require 'gamemodal.partial.php';
            ?>


            <table class="table table-hover">
                <tbody>
                <?php
                foreach ($results as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'name') {
                            echo    "<tr><td><form method='post' class='form-inline' action='/playgame'><button type='submit' class='btn btn-primary' name='nopf' value='$items->nopf'><input value='$value' name='titel' style='display:none;'><input value='$items->nopt' name='nopt' style='display:none;'>Play game</button></form></td>" .
                                    "<td><a href=\"#\" data-toggle=\"popover\" data-trigger=\"hover\" title=\"Omschrijving\" data-content=\"  $items->description \">
                                    " . $value . "</a></td>" . "<td>" . $items->nopf . "-" . $items->nopt . "</td><td>" . $items->dor .
                                    "</td><td><form method='post' class='form-inline' action='/removegame'><button type='submit' class='btn btn-primary' name='id' value='$items->id'><i class=\"fa fa-times-circle \"></i></button></form></td></tr> ";
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
    </div> <!-- End div row -->
</div>

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>