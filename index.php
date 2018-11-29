<?php


require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';
$current = Request::uri();


if (substr($current, 0, 1) == '/'){
    $current = substr($current , 1);
}

/**
 * Where are you in your page and where do you go with the
 * routes and controllers
 *
 * @routes.php routes to different endpoints
 * @Request::uri get the uri
 * @Request::method POST or GET?
 */
require Router::load('routes.php')//chaining!!
->direct(Request::uri(), Request::method());
