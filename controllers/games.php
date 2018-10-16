<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

require 'core/Player.php';
require 'core/Users.php';
require 'core/Games.php';

if(Request::uri() == 'addgame'){
    $name = $_POST['titel'];
    $nopf = $_POST['nopf'];
    $nopt = $_POST['nopt'];
    $nop = $nopf . '-' . $nopt;
    $dor = $_POST['date'];
    $description = $_POST['omschrijving'];


    $results = $app['database']->insertGame($name, $nop, $dor, $description);

    header("Location: /games");
    exit;
}
elseif(Request::uri() == 'removegame'){
    $id = $_POST['id'];

    $results = $app['database']->removeGame($id);

    header("Location: /games");
    exit;

}
elseif(Request::uri() == 'playgame'){
    $id = $_POST['id'];
    $result = $app['database']->selectGame($id);

    require'public/playgame.php';

}
else {

    $results = $app['database']->selectAll('games', 'Games');
    require 'views/games.view.php';
}