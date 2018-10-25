<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

session_start();
if(!is_null($_SESSION)){


require 'core/Player.php';
require 'core/Players.php';
require 'core/Users.php';
require 'core/Games.php';
require 'core/Battles.php';

    //error amount of players from when there are not as many players selected as necessary (when finishing a battle)
    $errorAopf = false;

    //error amount of players to when there are too many players selected (when adding a player)
    $errorAopt = false;

if(Request::uri() == 'startbattle'){
    $games = $app['database']->selectAll('games', 'Games');
    $battles = $app['database']->selectAll('battles', 'Battles');
    $players = $app['database']->selectAll('player', 'Player');

    require'public/battle.php';

}
elseif(Request::uri() == 'deletebattleplayer'){

    $amountOfPlayers = $_POST['aop'];

    $amountOfPlayers = $amountOfPlayers - 1;

    $nop = $_POST['nop'];

    $player = $_POST['playername'];


    $result = $app['database']->removeBattleplayer($player);

    goto a;

}

elseif(Request::uri() == 'addplayertobattle'){

    $nopt = $_POST['nopt'];

    $amountOfPlayers = $_POST['aop'];
    if($nopt <= $amountOfPlayers){
        $errorAopt = true;

    }
    else {
        $amountOfPlayers = $amountOfPlayers + 1;

        $nickname = $_POST['nickname'];

        $result = $app['database']->addBattleplayer($nickname);



    }


    goto a;








}
elseif(Request::uri() == 'finishbattle'){

    $nopf = $_POST['nopf'];
    //var_dump($nopf);
    $amountOfPlayers = $_POST['aop'];
    //var_dump($amountOfPlayers);
    if($nopf > $amountOfPlayers){

        $errorAopf = true;

        $winner = $_POST['winner'];

        goto a;

    }
    else {
        $score = $_POST['score'];
        //if there aren't any scores
        if($score == '1'){
            $winner = $_POST['winner'];
        }
        //if there are scores
        else{
            $scores = $_POST['scores'];
            $players = $_POST['players'];

            $intscores = array_map('intval', $scores);

            $playerscores = array_combine($players, $intscores);

            arsort($playerscores);
            $firstIndex = true;
            foreach($playerscores as $key => $value){
                if ($firstIndex) {
                    $winner = $key;
                    $score = $value;
                    $firstIndex = false;
                }

            }

        }












        $gametitle = $_POST['titel'];

        $gameid = $app['database']->selectGameid($gametitle);
        $gameint = intval(implode($gameid[0]));


        $players = $app['database']->selectPlayers();
        $string = '';
        foreach ($players as $player) {
            foreach ($player as $item => $value) {

                $string .= $value . '<br>';


            }
        }

        $date = date("Y-m-d");

        if($score == '1') {
            $result = $app['database']->finishBattleWithoutScore($date, $winner, $gameint, $string);
        }
        else{
            $result = $app['database']->finishBattleWithScore($date, $winner, $score, $gameint, $string);
        }

        $delete = $app['database']->deletePlayers();
        goto battles;

    }

}

elseif(Request::uri() == 'selectgame'){
    $delete = $app['database']->deletePlayers();
    $amountOfPlayers = 0;
    a:

    $titel = $_POST['titel'];
    $gameid = $app['database']->selectGameid($titel);

    $game = $app['database']->selectGame($gameid[0]['id']);

    $nop =  $game[0]['nopf'] . "-" . $game[0]['nopt'];

    $nopf = $game[0]['nopf'];
    $nopt = $game[0]['nopt'];

    $score = $game[0]['score'];
    $players = $app['database']->selectOnlineplayers();
    $selection = $app['database']->selectAll('players', 'Players');
    require'public/playgame.php';

}

else {
    battles:
    require 'views/battles.view.php';

}

}
else{
    header("Location:/");
    exit;
}