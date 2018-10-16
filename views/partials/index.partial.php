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

            <form method="post" action="/adduser" class="form-inline">


                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="first name" name="fname">


                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="last name" name="lname">

                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email" name="email">
                </div>

                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="nick name" name="nickname">

                <button type="submit" class="btn btn-outline-primary">Submit</button>

            </form>

            <h4>Users</h4>

            <table class="table table-hover">
                <tbody>
                <?php
                foreach ($results as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'fname') {
                            echo "<tr><td>" . $value . "</td><td>" . $items->lname . "</td><td>" . $items->email .
                                "</td><td><form method=\"post\" action=\"deleteuser\" class=\"form-inline\">
                                    <button type=\"submit\" class=\"btn btn-danger\" aria-label=\"Delete\ name=\"id\" value=\"$items->id\">
                                        <i class=\"fa fa-trash-o fa-fw\" aria-hidden=\"true\"></i>
                                    </button>
                                 </form></td>
                                 
                                <td><form method=\"post\" action=\"finduser\" class=\"form-inline\">
                                <button type=\"submit\" class=\"btn btn-primary\" aria-label=\"Alter\" name=\"id\" value=\"$items->id\">
                                        <i class=\"fa fa-edit fa-fw\" aria-hidden=\"true\"></i>
                                    </button>
                                </form>
                                </td></tr> ";

                        }
                    }
                }

                ?>
                </tbody>
            </table>
        </div>
        </div><!-- End div - user -->



        </div><!-- End div - class Player-->

