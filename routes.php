<?php
/**
 * GET routes
 */



    $router->get('', 'controllers/index.php');
    $router->get('/home', 'controllers/users.php');
    $router->get('/players', 'controllers/players.php');
    $router->get('/games', 'controllers/games.php');
    $router->get('/users', 'controllers/users.php');
    $router->get('/battles', 'controllers/battles.php');
    $router->get('/leaderboard', 'controllers/leaderboard.php');
    $router->get('/contact', 'controllers/contact.php');
    $router->get('/registreren', 'controllers/user.php');
    $router->get('/loguit', 'controllers/loguit.php');
    $router->get('/changestatus', 'controllers/navbar.php');
    $router->get('/account', 'controllers/navbar.php');
    $router->get('/changepassword', 'controllers/navbar.php');
    $router->get('/cancelaccountchange', 'controllers/navbar.php');
    $router->get('/cancelpasswordchange', 'controllers/navbar.php');
    $router->get('/changepassword', 'controllers/navbar.php');

    $router->get('/berichten', 'controllers/contact.php');
    $router->get('/gotostartbattle', 'controllers/battles.php');








    $router->post('/login', 'controllers/login.php');



    $router->post('/account', 'controllers/login.php');
    $router->post('/adduser', 'controllers/user.php');
    $router->post('/deleteuser', 'controllers/user.php');
    $router->post('/finduser', 'controllers/user.php');
    $router->post('/alteruser', 'controllers/user.php');
    $router->post('/addgame', 'controllers/games.php');
    $router->post('/removegame', 'controllers/games.php');
    $router->post('/playgame', 'controllers/games.php');
    $router->post('/addsuggestion', 'controllers/games.php');
    $router->post('/startbattle', 'controllers/battles.php');
    $router->post('/deletebattleplayer', 'controllers/battles.php');
    $router->post('/addplayertobattle', 'controllers/battles.php');
    $router->post('/selectgame', 'controllers/battles.php');
    $router->post('/finishbattle', 'controllers/battles.php');
    $router->post('/changeaccount', 'controllers/navbar.php');
    $router->post('/newpassword', 'controllers/navbar.php');
    $router->post('/bericht', 'controllers/contact.php');
    $router->post('/berichtlezen', 'controllers/contact.php');




/**


    $router->get('~s1129640/P1_OOAPP_Opdracht', 'controllers/index.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/home', 'controllers/users.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/players', 'controllers/players.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/games', 'controllers/games.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/users', 'controllers/users.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/battles', 'controllers/battles.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/leaderboard', 'controllers/leaderboard.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/contact', 'controllers/contact.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/registreren', 'controllers/user.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/loguit', 'controllers/loguit.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/changestatus', 'controllers/navbar.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/account', 'controllers/navbar.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/changepassword', 'controllers/navbar.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/cancelaccountchange', 'controllers/navbar.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/cancelpasswordchange', 'controllers/navbar.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/changepassword', 'controllers/navbar.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/berichten', 'controllers/contact.php');
    $router->get('~s1129640/P1_OOAPP_Opdracht/gotostartbattle', 'controllers/battles.php');



    $router->post('~s1129640/P1_OOAPP_Opdracht/login', 'controllers/login.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/account', 'controllers/login.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/adduser', 'controllers/user.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/deleteuser', 'controllers/user.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/finduser', 'controllers/user.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/alteruser', 'controllers/user.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/addgame', 'controllers/games.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/removegame', 'controllers/games.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/playgame', 'controllers/games.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/addsuggestion', 'controllers/games.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/startbattle', 'controllers/battles.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/deletebattleplayer', 'controllers/battles.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/addplayertobattle', 'controllers/battles.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/selectgame', 'controllers/battles.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/finishbattle', 'controllers/battles.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/changeaccount', 'controllers/navbar.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/newpassword', 'controllers/navbar.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/bericht', 'controllers/contact.php');
    $router->post('~s1129640/P1_OOAPP_Opdracht/berichtlezen', 'controllers/contact.php');

*/