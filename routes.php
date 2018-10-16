<?php
/**
 * GET routes
 */

if($_SERVER['HTTP_HOST'] == 'localhost:8080') {

    /**
     * POST routes
     */
    $router->get('', 'controllers/index.php');
    $router->get('home', 'controllers/index.php');
    $router->get('players', 'controllers/players.php');
    $router->get('games', 'controllers/games.php');
    $router->get('users', 'controllers/users.php');
    $router->get('battles', 'controllers/battles.php');
    $router->get('leaderboard', 'controllers/leaderboard.php');



    /**
     * POST routes
     */

    $router->post('adduser', 'controllers/user.php');
    $router->post('deleteuser', 'controllers/user.php');
    $router->post('finduser', 'controllers/user.php');
    $router->post('alteruser', 'controllers/user.php');

    $router->post('addgame', 'controllers/games.php');
    $router->post('removegame', 'controllers/games.php');
    $router->post('playgame', 'controllers/games.php');


    $router->post('startbattle', 'controllers/battles.php');
    $router->post('addplayertobattle', 'controllers/battles.php');
}


else {

    $router->get('', 'controllers/index.php');
    $router->get('home', 'controllers/index.php');
    $router->get('players', 'controllers/players.php');
    $router->get('games', 'controllers/games.php');
    $router->get('users', 'controllers/users.php');
    $router->get('battles', 'controllers/battles.php');
    $router->get('leaderboard', 'controllers/leaderboard.php');



    /**
     * POST routes
     */
    $router->post('adduser', 'controllers/user.php');
    $router->post('deleteuser', 'controllers/user.php');
    $router->post('finduser', 'controllers/user.php');
    $router->post('alteruser', 'controllers/user.php');

    $router->post('addgame', 'controllers/games.php');
    $router->post('removegame', 'controllers/games.php');
    $router->post('playgame', 'controllers/games.php');

    $router->post('startbattle', 'controllers/battles.php');
    $router->post('addplayertobattle', 'controllers/battles.php');

}

