<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

require 'core/Player.php';
require 'core/Users.php';
/**
 * @internal view index.php
 */

$results = $app['database']->selectAll('player', 'Player');


require 'views/leaderboard.view.php';