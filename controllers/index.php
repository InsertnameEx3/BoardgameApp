<?php
/**
 * get database
 * @Player
 * @Users
 */
require 'core/Player.php';
require 'core/Users.php';

/**
 * @var $results database query for landing page
 */
$results = $app['database']->selectAll('users', 'Users');

/**
 * @internal view index.php
 */
require 'views/index.view.php';