<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Database\DatabaseConnection;
use App\router\Router;

$db = (new DatabaseConnection())->getConnection();
$router = new Router($_REQUEST);
