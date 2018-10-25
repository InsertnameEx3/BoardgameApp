<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

session_start();
if(!is_null($_SESSION)) {

    require 'core/Player.php';
    require 'core/Users.php';



    $results = $app['database']->selectAll('player', 'Player');


    require 'views/players.view.php';



}
else{
    header("Location:/");
    exit;
}