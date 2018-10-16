<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */


require 'core/Player.php';
require 'core/Users.php';

$results = $app['database']->selectAll('player', 'Player');
//$nickname = $results->name;

//$player = new Player('hello', false);

    /**foreach($results as $items) {
        foreach ($items as $item => $value) {
            if($value = 0){
                $items->gamestatus = false;

            }
            else{
                $items->gamestatus = true;

            }
        }
    }*/
require 'views/players.view.php';