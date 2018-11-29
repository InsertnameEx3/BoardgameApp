<?php

session_start();
if (Request::uri() == '/changestatus') {
    $id = $_SESSION["id"];


    if ($_SESSION["gamestatus"] == 1) {

        $test = $app['database']->changeStatus(0, $id);
        $_SESSION["gamestatus"] = 0;
        header('Location: ' . $_SESSION['previous_uri']);
    } elseif ($_SESSION["gamestatus"] == 0) {

        $test = $app['database']->changeStatus(1, $id);
        $_SESSION["gamestatus"] = 1;
        header('Location: ' . $_SESSION['previous_uri']);


    }
} elseif (Request::uri() == '/account') {
    require 'public/account.php';
} elseif (Request::uri() == '/cancelaccountchange') {
    header("Location: " . $_SESSION['previous_uri']);
    exit;
} elseif (Request::uri() == '/changeaccount') {
    $nickname = convert($_POST['nickname']);

    $email = convert($_POST['email']);
    $fname = convert($_POST['fname']);
    $lname = convert($_POST['lname']);

    $id = $app['database']->selectUserID($email);


    $user = $app['database']->alterUser($fname, $lname, $email, $nickname, $id[0]['id']);

    header("Location: account");
    exit;


} elseif (Request::uri() == '/cancelpasswordchange') {
    header("Location: account");
    exit;
} elseif (Request::uri() == '/changepassword') {
    $errorSame = false;
    $errorRepeat = false;
    $errorPassword = false;
    require 'public/changepassword.php';
} elseif (Request::uri() == '/newpassword') {


    $curpassword = convert($_POST['curpassword']);
    $newpassword = convert($_POST['newpassword']);
    $passwordmatch = convert($_POST['passwordmatch']);


    $results = $app['database']->comparator($_SESSION['email']);


    $ww = implode($results[0]);

    $errorSame = false;
    $errorRepeat = false;
    $errorPassword = false;


    if (password_verify($curpassword, $ww)) {
        if ($newpassword == $passwordmatch) {
            if ($newpassword != $curpassword) {

                $password = password_hash($newpassword, PASSWORD_DEFAULT);

                $app['database']->changePassword($password, $_SESSION['id']);

                header("Location: account");
                exit;
            } else {
                $errorSame = true;
                require 'public/changepassword.php';
            }
        } else {
            $errorRepeat = true;
            require 'public/changepassword.php';
        }

    } else {
        $errorPassword = true;
        require 'public/changepassword.php';

    }


}
function convert($data)
{
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
    return $data;
}