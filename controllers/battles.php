<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

require 'core/Player.php';
require 'core/Players.php';
require 'core/Users.php';
require 'core/Games.php';
require 'core/Battles.php';

if(Request::uri() == 'startbattle'){
    $games = $app['database']->selectAll('games', 'Games');
    $battles = $app['database']->selectAll('battles', 'Battles');
    $players = $app['database']->selectAll('player', 'Player');
    require'public/battle.php';

}
elseif(Request::uri() == 'deletebattleplayer'){

    $player = $_POST['playername'];


    $result = $app['database']->removeBattleplayer($player);

    goto a;

}

elseif(Request::uri() == 'addplayertobattle'){





    $nickname = $_POST['nickname'];

    $result = $app['database']->addBattleplayer($nickname);


    goto a;







}
elseif(Request::uri() == 'finishbattle'){


    $gametitle = $_POST['titel'];
    $winner = $_POST['winner'];
    $gameid = $app['database']->selectGameid($gametitle);
    $gameint = intval(implode($gameid[0]));

    $players = $app['database']->selectPlayers();
    $string = '';
    foreach($players as $player){
        foreach($player as $item => $value){

            $string .= $value. '<br>';


        }
    }
    $date = date("Y-m-d");

    $result = $app['database']->finishBattle($date, $winner, $gameint, $string);

    goto battles;


}

elseif(Request::uri() == 'selectgame'){
    a:
    $titel = $_POST['titel'];
    $nop = $_POST['nop'];
    $players = $app['database']->selectAll('player', 'Player');
    $selection = $app['database']->selectAll('players', 'Players');
    require'public/playgame.php';

}

else {
    battles:
    require 'views/battles.view.php';

}