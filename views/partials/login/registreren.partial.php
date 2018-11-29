<link rel="stylesheet" href="login.style.css">
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <!-- Default form login -->
            <form method="post" action="adduser"  autocomplete="off">

                <p class="h4 mb-4">Registreer</p>

                <div class="form-group row">
                    <div class="col">
                        <label>Voornaam</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput"
                               placeholder="first name" name="fname" required>
                    </div>
                    <div class="col">
                        <label>Achternaam</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput"
                               placeholder="last name" name="lname">
                    </div>
                </div>


                <div class="form-group">


                    <label>Email</label>


                    <input type="email" class="form-control <?php if ($errorDuplicate == true) {
                        echo "is-invalid";
                    } ?>" id="inlineFormInputGroup" placeholder="email" name="email" required>
                    <?php if ($errorDuplicate == true) {
                        echo "
                        <div class=\"invalid-feedback\">Er bestaat al een account met het dit emailadres</div>";
                    } ?>


                </div>


                <div class="form-group">

                    <label>Username</label>


                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput"
                           placeholder="nick name" name="nickname" required>

                </div>

                <div class="form-group row">
                    <div class="col">
                        <labe>Wachtwoord</labe>
                        <input type="password" class="form-control <?php if ($errorSame == true) {
                            echo "is-invalid";
                        } ?>" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord" required>
                        <?php if ($errorSame == true) {
                            echo "
                            <div class=\"invalid-feedback\">De wachtwoorden komen niet overeen</div>";
                        } ?>
                    </div>

                    <div class="col">
                        <labe>Herhaling wachtwoord</labe>
                        <input type="password" class="form-control <?php if ($errorSame == true) {
                            echo "is-invalid";
                        } ?>" id="wachtwoordherhaling" name="wachtwoordherhaling" placeholder="wachtwoord herhaling"
                               required>

                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-block my-4">Registreer</button>

            </form>
            <!-- Default form login -->
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>







