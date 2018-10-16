<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */



require 'core/Player.php';
require 'core/Users.php';

/**
 * @var $results database query for landing page
 */



if(Request::uri()=='adduser') {



    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];





    $results = $app['database']->insertUser($fname, $lname, $email, $nickname);




    header("Location: /home");
    exit;





}
elseif (Request::uri()=='deleteuser'){
    $id = $_POST['id'];
    $delete = $app['database']->deleteUser($id);

    header("Location: /home");
    exit;
}


elseif (Request::uri()=='finduser'){
    $id = $_POST['id'];
    $user = $app['database']->selectUser($id);
    $player = $app['database']->selectPlayer($id);

    $results = $app['database']->selectAll('users', 'Users');
    require 'public/alteruser.php';

}
elseif(Request::uri()=='alteruser'){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];

    $results = $app['database']->alterUser($fname, $lname, $email, $nickname, $id);
    header("Location: /home");
    exit;

}
else {
    /**
     * @internal view index.php
     */
    require 'views/index.view.php';

}