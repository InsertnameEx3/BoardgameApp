<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Voeg game toe</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="/addgame" class="form">
                    <div class="container">
                        <div class="row form-group">
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Titel" name="titel" required>
                        </div>

                        <div class="row form-group">
                            <div class="row-md-2">
                                <input class="form-control" type="number" value="1" id="example-number-input" name="nopf" required>
                            </div>
                            <label for="exampleTextarea">-</label>
                            <div class="row-md-2">
                                <input class="form-control" type="number" value="2" id="example-number-input" name="nopt" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <input class="form-control" type="number" value="2001" id="example-number-input" name="date">
                        </div>


                        <div class="row form-group">

                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value=1 name="score" required>Met score
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value=0 name="score" required>Zonder score
                                </label>
                            </div>
                        </div>

                        <div class="row form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Omschrijving" name="omschrijving" required></textarea>
                        </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <?php
                        if($_SESSION['functie'] == 'admin'){
                            echo"<button type=\"submit\" class=\"btn btn-primary\">Voeg toe</button>";
                        }
                        elseif($_SESSION['functie'] == 'gebruiker'){
                            echo"<button type=\"submit\" class=\"btn btn-primary\">Verstuur suggestie</button>";
                        }?>

                    </div>




                    </div>
                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>



