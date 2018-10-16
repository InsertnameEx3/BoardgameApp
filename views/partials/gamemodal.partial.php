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
                    <div class="row">
                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Titel" name="titel">
                    </div>

                    <div class="row">
                        <div class="row-md-2">
                            <input class="form-control" type="number" value="1" id="example-number-input" name="nopf">
                        </div>
                        <label for="exampleTextarea">-</label>
                        <div class="row-md-2">
                            <input class="form-control" type="number" value="2" id="example-number-input" name="nopt">
                        </div>
                    </div>

                    <div class="row">
                        <input class="form-control" type="number" value="2001" id="example-number-input" name="date">
                    </div>

                        <div class="row">
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Omschrijving" name="omschrijving"></textarea>
                        </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Voeg toe</button>
                    </div>




                    </div>
                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>



