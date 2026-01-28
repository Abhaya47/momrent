<?php

use rent\Database\DatabaseConnection;
use rent\Router\Router;

include("Database/DatabaseConnection.php");
include("Router/Router.php");

$database = new DatabaseConnection();
$router = new Router($_REQUEST);
