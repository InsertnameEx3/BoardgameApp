<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
session_start();
if (!empty($_SESSION)) {


    require 'core/Player.php';
    require 'core/Users.php';
    /**
     * @internal view index.php
     */

    $spelers = $app['database']->leaderboard('Player');

    $spellen = $app['database']->leaderboardGames('Games');

    require 'views/leaderboard.view.php';

} else {
    session_unset();
    session_destroy();
    $_SESSION = array();
    header("Location: /");
    exit;
}