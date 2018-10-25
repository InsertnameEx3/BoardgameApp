<?php
/**
 * GET routes
 */

if($_SERVER['HTTP_HOST'] == 'localhost:8080') {

    /**
     * Get routes
     */


    $router->get('', 'controllers/index.php');
    $router->get('home', 'controllers/users.php');
    $router->get('players', 'controllers/players.php');
    $router->get('games', 'controllers/games.php');
    $router->get('users', 'controllers/users.php');
    $router->get('battles', 'controllers/battles.php');
    $router->get('leaderboard', 'controllers/leaderboard.php');
    //$router->get('login', 'controllers/login.php');
    $router->get('registreren', 'controllers/registreren.php');
    $router->get('loguit', 'controllers/loguit.php');
    $router->get('changestatus', 'controllers/navbar.php');
    $router->get('account', 'controllers/navbar.php');
    $router->get('account/changepassword', 'controllers/navbar.php');


    $router->get('cancelaccountchange', 'controllers/navbar.php');


    $router->get('account/cancelpasswordchange', 'controllers/navbar.php');
    $router->get('account/changepassword', 'controllers/navbar.php');



    /**
     * POST routes
     */

    $router->post('login', 'controllers/login.php');

    $router->post('account', 'controllers/login.php');


    $router->post('adduser', 'controllers/user.php');
    $router->post('deleteuser', 'controllers/user.php');
    $router->post('finduser', 'controllers/user.php');
    $router->post('alteruser', 'controllers/user.php');

    $router->post('addgame', 'controllers/games.php');
    $router->post('removegame', 'controllers/games.php');
    $router->post('playgame', 'controllers/games.php');
    $router->post('addsuggestion', 'controllers/games.php');



    $router->post('startbattle', 'controllers/battles.php');
    $router->post('deletebattleplayer', 'controllers/battles.php');
    $router->post('addplayertobattle', 'controllers/battles.php');
    $router->post('selectgame', 'controllers/battles.php');
    $router->post('finishbattle', 'controllers/battles.php');

    $router->post('changeaccount', 'controllers/navbar.php');

    $router->post('account/newpassword', 'controllers/navbar.php');
}


else {

    $router->get('LeerlingNummer', 'controllers/index.php');
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
    $router->post('deletebattleplayer', 'controllers/battles.php');
    $router->post('addplayertobattle', 'controllers/battles.php');
    $router->post('selectgame', 'controllers/battles.php');

}

