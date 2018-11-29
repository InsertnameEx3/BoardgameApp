<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

session_start();
if (!empty($_SESSION)) {

    require 'core/Player.php';
    require 'core/Users.php';
    require 'core/Games.php';
    require 'core/Players.php';

    if (Request::uri() == '/addgame') {
        $name = $_POST['titel'];
        $nopf = $_POST['nopf'];
        $nopt = $_POST['nopt'];

        $dor = $_POST['date'];
        $score = $_POST['score'];
        $description = $_POST['omschrijving'];

        if ($_SESSION['functie'] == 'admin') {
            $results = $app['database']->insertGame($name, $nopf, $nopt, $dor, $score, $description, '0');
        } elseif ($_SESSION['functie'] == 'gebruiker') {
            //suggestion false/true, an user can suggest a game which can be added by an admin;
            $results = $app['database']->insertGame($name, $nopf, $nopt, $dor, $score, $description, '1');
        }


        header("Location: games");
        exit;
    } elseif (Request::uri() == '/removegame') {
        $id = $_POST['id'];

        $results = $app['database']->removeGame($id);

        header("Location: games");
        exit;

    } elseif (Request::uri() == '/playgame') {
        $results = $app['database']->selectAll('games', 'Games');
        $players = $app['database']->selectAll('player', 'Player');
        $selection = $app['database']->selectAll('players', 'Players');
        $titel = $_POST['titel'];
        $nopf = $_POST['nopf'];
        $nopt = $_POST['nopt'];
        $nop = $nopf;

        require 'public/battle.php';

    } elseif (Request::uri() == '/addsuggestion') {
        $id = $_POST['id'];

        $result = $app['database']->addSuggestion($id);
    } else {

        $results = $app['database']->selectGames('0', 'Games');
        $suggestions = $app['database']->selectGames('1', 'Games');
        require 'views/games.view.php';
    }

} else {
    session_unset();
    session_destroy();
    $_SESSION = array();
    header("Location:");
    exit;
}