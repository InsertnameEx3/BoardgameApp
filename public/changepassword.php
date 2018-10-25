<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alleen voor de Liefhebber</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/Logo-gezinshuis/Icon/Regterinklogo.ico" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="views/components/login/login.style.css">
</head id="LoginForm">
<body>



<form action="cancelpasswordchange" id="cancel"></form>
<form action="newpassword" method="post">
<div class="container">
    <div class="form-group row">
        <div class="col-md-2">
            <label>Huidige</label>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="myInput1" name="curpassword" required>
                <div class="input-group-prepend">
                    <button type="button" class="input-group-addon" onclick="myFunction1()"> <span id="myImg1" class="fa fa-eye-slash"></span></button>
                </div>
            </div>
        </div>
    </div>



    <div class="form-group row">
        <div class="col-md-2">
            <label>Nieuw wachtwoord</label>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="myInput2" name="newpassword" required>
                <div class="input-group-prepend">
                    <button type="button" onclick="myFunction2()" class="input-group-addon"> <span id="myImg2" class="fa fa-eye-slash"></span></button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label>Herhaling wachtwoord</label>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="password" class="form-control" id="myInput3" name="passwordmatch" required>
                <div class="input-group-prepend">
                    <button type="button" onclick="myFunction3()" class="input-group-addon"> <span id="myImg3" class="fa fa-eye-slash"></span></button>
                </div>
            </div>
        </div>
    </div>



    <a href="#">
        Wachtwoord vergeten?
    </a>

    <button type="submit" class="btn" form="cancel">Cancel</button>
    <button type="submit" class="btn btn-primary">Verander wachtwoord</button>
</div>
</div>
</form>

<script>


    function myFunction1() {
        var x = document.getElementById("myInput1");
        var y = document.getElementById("myImg1");
        if (x.type === "password") {
            x.type = "text";
            y.className = "fa fa-eye";
        } else {
            y.className = "fa fa-eye-slash";
            x.type = "password";
        }
    }
    function myFunction2() {
        var x = document.getElementById("myInput2");
        var y = document.getElementById("myImg2");
        if (x.type === "password") {
            x.type = "text";
            y.className = "fa fa-eye";
        } else {
            x.type = "password";
            y.className = "fa fa-eye-slash";
        }
    }
    function myFunction3() {
        var x = document.getElementById("myInput3");
        var y = document.getElementById("myImg3");
        if (x.type === "password") {
            x.type = "text";
            y.className = "fa fa-eye";
        } else {
            x.type = "password";
            y.className = "fa fa-eye-slash";
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>

