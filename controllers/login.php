<?php




if(Request::uri() == '/login') {

    $email = convert(($_POST["mail"]));
    $password = convert(($_POST["password"]));


    $results = $app['database']->comparator($email);

    if (empty($results)) {
        $Passworderror = false;
        $Emailerror = "Er bestaat geen account met het emailadres: " . $email;
        require 'views/index.view.php';

    } else {
        $ww = implode($results[0]);


        if (password_verify($password, $ww)) {

            session_start();
            $id = $app['database']->selectUserID($email);
            $id = $id[0]['id'];

            $player = $app['database']->selectPlayerbyID($id);
            $user = $app['database']->selectUser($id);

            $_SESSION["nickname"] = $player[0]['nickname'];
            $_SESSION["gamestatus"] = $player[0]['gamestatus'];
            $_SESSION["wins"] = $player[0]['wins'];

            $_SESSION["id"] = $user[0]['id'];
            $_SESSION["functie"] = $user[0]['functie'];
            $_SESSION["fname"] = $user[0]['fname'];
            $_SESSION["lname"] = $user[0]['lname'];
            $_SESSION["email"] = $user[0]['email'];

            header("Location: home");
            exit;

        } else {
            $Emailerror = false;
            $Passworderror = "Het wachtwoord komt niet overeen met de accountgegevens";
            require 'views/index.view.php';
        }


    }
}

function convert($data)
{
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}








