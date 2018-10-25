<div class="container-fluid">

    <div class="container">
            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center text-white mx-auto" style="width:40%; padding-top: 2em; padding-bottom: 2em; background: rgba(0, 0, 0, 0.9);">
                    <h1 class="display-3">Welkom</h1>
                    <p class="lead">ADSD 2018 2019</p>
                </div>
                </div>
            </div>


        <div class="container">






                <?php
                if($_SESSION['functie'] == 'admin') {
                    echo "<h4>Users</h4>

            <table class=\"table table-hover\"><tbody>";
                    foreach ($results as $items) {
                        foreach ($items as $item => $value) {
                            if ($item == 'fname') {
                                echo "<tr><td>" . $value . "</td><td>" . $items->lname . "</td><td>" . $items->email .
                                    "</td><td><form method=\"post\" action=\"deleteuser\" class=\"form-inline\">
                                    <button type=\"submit\" class=\"btn btn-danger\" aria-label=\"Delete\" name=\"id\" value=\"$items->id\">
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
                    echo "</tbody>
            </table>
        </div>";
                }
                else{
                    echo "";
                }
                ?>

    </div><!-- End div - user -->



</div><!-- End div - class Player-->
</div>

