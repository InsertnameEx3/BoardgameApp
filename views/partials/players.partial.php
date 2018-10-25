<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="bg-primary text-white ">
                Welkom ADSD 2018!
            </div>
        </div> <!-- End div greeting -->
        <hr>
        <div class="col-10 offset-1">
            <h4>Players</h4>

            <ul class="list-group list-group-flush">

                <?php
                foreach ($results as $items) {
                    foreach ($items as $item => $value) {


                        if ($item == 'nickname') {
                            echo "<li class='list-group-item'>" . $value . " ";
                            if($items->gamestatus == 0){echo"offline";} else{echo"online";}
                            echo "</li> ";
                        }
                    }
                }

                ?>

            </ul>


        </div><!-- End div - players -->
        <hr>
        <div class="col-10 offset-1">

        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->