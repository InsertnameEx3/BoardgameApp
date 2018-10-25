<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
session_start();
if(!is_null($_SESSION)){


require 'core/Player.php';
require 'core/Users.php';
/**
 * @internal view index.php
 */

$results = $app['database']->leaderboard('Player');


require 'views/leaderboard.view.php';

}
else{
    header("Location: /");
    exit;
}