<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Database\DatabaseConnection;
use App\router\Request;
use App\router\Router;
use App\router\Routes;

//initialse database
(new DatabaseConnection())->getConnection();

$router = new Router();
//load routes
(new Routes())->routes($router);

$request = new Request();
//routes to controller
$router->handler($request->method(), $request->url());