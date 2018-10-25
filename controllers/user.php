<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */


session_start();
if(!is_null($_SESSION)) {

    require 'core/Player.php';
    require 'core/Users.php';

    /**
     * @var $results database query for landing page
     */

    if (!is_null($_SESSION)) {

        if (Request::uri() == 'adduser') {


            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $nickname = $_POST['nickname'];

            $password = $_POST['wachtwoord'];
            $passwordCheck = $_POST['wachtwoordherhaling'];

            if ($password == $passwordCheck) {

                $password = password_hash($password, PASSWORD_DEFAULT);

                $results = $app['database']->insertUser($fname, $lname, $email, $nickname, $password);

                header("Location: /");
                exit;
            } else {
                echo "werken ni";
            }


        }
        elseif (Request::uri() == 'finduser') {
            $id = $_POST['id'];

            $user = $app['database']->selectUser($id);
            $player = $app['database']->selectPlayerbyID($id);

            require 'public/alteruser.php';

        }
        elseif (Request::uri() == 'alteruser') {
            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $nickname = $_POST['nickname'];

            $user = $app['database']->alterUser($fname, $lname, $email, $nickname, $id);
            header("Location: /home");
            exit;


        }
        elseif (Request::uri() == 'deleteuser') {
            $id = $_POST['id'];

            $results = $app['database']->deleteUser($id);

            header("Location: /home");
            exit;
        }
    }
}
else{
    header("Location:/");
    exit;
}













