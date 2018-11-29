<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

session_start();
if (!empty($_SESSION)) {

    require 'core/Player.php';
    require 'core/Users.php';


    $results = $app['database']->selectAll('player', 'Player');


    require 'views/players.view.php';


} else {
    session_unset();
    session_destroy();
    $_SESSION = array();
    header("Location:");
    exit;
}