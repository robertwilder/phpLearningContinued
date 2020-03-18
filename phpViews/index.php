<?php

$query = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';


$uri = (trim($_SERVER['REQUEST_URI'], '/'));
// // trim trims off white space, but additionally it can be asked to trim particular characters 

// // require $routes->direct('contact');

// require $router->direct($uri);
// simpler method to create a router in php, grabs uri then adds it to the end of the top box


require Router::load('routes.php')
    ->direct($uri);

