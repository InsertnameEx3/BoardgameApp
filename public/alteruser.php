<?=require'views/partials/head.php';?>

<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-3">Welkom</h1>
                    <p class="lead">ADSD 2018 2019</p>
                </div>
            </div>
        </div>
        <div class="container">


            <h1>Add player</h1>

            <form method="post" action="/alteruser" class="form-inline">

                <?php foreach ($user as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'fname') {



                            echo "<input type = \"text\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" id= \"inlineFormInput\" placeholder = \"first name\" name = \"fname\" value = \"$value\" >";
};
                            if ($item == 'lname') {
                                echo "<input type = \"text\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" id = \"inlineFormInput\" placeholder = \"last name\" name = \"lname\" value = \"$value\" >";
                            }
                            if($item == 'email'){

echo "<div class=\"input-group mb-2 mr-sm-2 mb-sm-0\" >
                    <span class=\"input-group-text\" id = \"basic-addon1\" > @</span >
                    <input type = \"text\" class=\"form-control\" id = \"inlineFormInputGroup\" placeholder = \"Email\" name = \"email\" value = \"$value\" >
                </div >";
}

}
}
foreach ($player as $items) {
    foreach ($items as $item => $value) {

        if ($item == 'nickname') {


            echo "<input type = \"text\" class=\"form-control mb-2 mr-sm-2 mb-sm-0\" id = \"inlineFormInput\" placeholder = \"nick name\" name = \"nickname\" value = \"$value\" >";

        }

    }
}
foreach ($user as $items) {
    foreach ($items as $item => $value) {
        if ($item == 'id') {
            echo "<form method=\"post\" action=\"alteruser\" class=\"form-inline\"><button type = \"submit\" class=\"btn btn-outline-primary\" name=\"id\" value=\"$value\"> Pas aan </button ></form>";
        }
    }
}


                    ?>
            </form>


        </div>
    </div><!-- End div - user -->



</div><!-- End div - class Player-->


<?=require'views/partials/foot.php';?>