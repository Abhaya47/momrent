<?php

include_once __DIR__ . '/vendor/autoload.php';

use App\Database\DatabaseConnection;

$db =(new DatabaseConnection())->getConnection();

$files = glob(__DIR__ . '/src/Database/Migrations/*.php');
//requires all migration files
foreach ($files as $file) {
    require_once $file;
}

//get_declared_class returns an array with the name of the defined classes that have been loaded into php memory
foreach (get_declared_classes() as $class) {
//is_subclass_of Checks whether a class extends Migration
    if (is_subclass_of($class, 'App\\Database\\Migration')) {
//basically saying new CreateUsersTable class
        var_dump($class);
        (new $class($db))->up();
    }
}

echo "All migrations executed.\n";

