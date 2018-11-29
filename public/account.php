<?php


require 'views/partials/head.php';

?>

    <div class="container">
        <br>
        <h4>Account</h4>
        <hr>
        <form action="cancelaccountchange" id="cancel"></form>
        <form action="changeaccount" method="post">
            <div class="form-group row">
                <div class="col-md-2">
                    <label>Nickname</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="<?= $_SESSION['nickname'] ?>" name="nickname"
                           required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                    <label>Email</label>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" value="<?= $_SESSION['email'] ?>" name="email" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                    <label>Voornaam</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" value="<?= $_SESSION['fname'] ?>" name="fname" required>
                </div>
                <div class="col-md-2">
                    <label>Achternaam</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" value="<?= $_SESSION['lname'] ?>" name="lname" required>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-md-2">
                    <label>Wachtwoord</label>
                </div>
                <div class="col-md-6">
                    <a href="changepassword">
                        Verander wachtwoord
                    </a>
                </div>
            </div>


            <button type="submit" class="btn" form="cancel">Cancel</button>
            <button type="submit" class="btn btn-primary">Verander gegevens</button>


        </form>
    </div>


<?php
require 'views/partials/foot.php';
?>