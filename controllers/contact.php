<?php


session_start();
if (!empty($_SESSION)) {
    if (Request::uri() == '/contact') {

        require 'views/contact.view.php';

    }


    if (Request::uri() == '/bericht') {

        $naam = $_SESSION["nickname"];
        $email = $_SESSION['email'];
        $onderwerp = $_POST['onderwerp'];
        $bericht = $_POST['bericht'];
        $datum = date("Y-m-d H:i:s");

        $verzenden = $app['database']->insertMessage($naam, $email, $onderwerp, $bericht, $datum);

        header("Location: contact");
        exit;
    } elseif (Request::uri() == '/berichten') {

        require 'core/Contact.php';


        $berichten = $app['database']->selectAllMessages('Berichten');

        require 'views/bericht.view.php';


    } elseif (Request::uri() == '/berichtlezen') {

        require 'core/Contact.php';
        $id = $_POST['id'];
        $berichten = $app['database']->selectMessage($id);

        require 'views/bericht.view.php';
    }
} else {
    session_unset();
    session_destroy();
    $_SESSION = array();
    header("Location:");
    exit;
}


