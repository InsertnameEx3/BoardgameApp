<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

require 'core/Player.php';
require 'core/Users.php';
require 'core/Games.php';
require 'core/Battles.php';

if(Request::uri() == 'startbattle'){
    $games = $app['database']->selectAll('games', 'Games');
    $battles = $app['database']->selectAll('battles', 'Battles');
    $players = $app['database']->selectAll('player', 'Player');
    require'public/battle.php';
}

elseif(Request::uri() == 'addplayertobattle'){
    $player = $_POST['nickname'];
    $result = $app['database']->selectBattleplayer($player);
    var_dump($result);
    //$insert = $app['database']->insertBattleplayer($result);

    //require'public/battle.php';

}
else {

    require 'views/battles.view.php';

}