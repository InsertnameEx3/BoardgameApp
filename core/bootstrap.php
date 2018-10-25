<?php

/** @var  $app empty variable to store config file */
$app = [];

$app['config'] = require 'config.php';

/**
 *Require several classes
 */
//require 'core/Router.php';
//require 'core/Request.php';
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';



/**
 * Get database connection
 */
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

