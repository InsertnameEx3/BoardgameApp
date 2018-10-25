<link rel="stylesheet" href="login.style.css">
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <!-- Default form login -->
            <form method="post" action="/adduser">

                <p class="h4 mb-4">Registreer</p>

                <div class="form-group row">
                    <div class="col">
                        <label>Voornaam</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="first name" name="fname" required>
                    </div>
                    <div class="col">
                        <label>Achternaam</label>
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="last name" name="lname">
                    </div>
                </div>


                <div class="form-group">


                    <label>Email</label>


                    <input type="email" class="form-control" id="inlineFormInputGroup" placeholder="email" name="email">

                </div>

                <div class="form-group">

                    <label>Username</label>


                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="nick name" name="nickname" required>

                </div>

                <div class="form-group row">
                    <div class="col">
                        <labe>Wachtwoord</labe>
                        <input type="password" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="wachtwoord"required>
                    </div>
                    <div class="col">
                        <labe>Herhaling wachtwoord</labe>
                        <input type="password" class="form-control" id="wachtwoordherhaling" name="wachtwoordherhaling" placeholder="wachtwoord herhaling"required>
                    </div>
                </div>


                <button type="submit"  class="btn btn-primary btn-block my-4">Registreer</button>

            </form>
            <!-- Default form login -->
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>







