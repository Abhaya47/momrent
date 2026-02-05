<?php

namespace rent\Database;
use PDO;
use PDOException;

class DatabaseConnection
{
    public function __construct() {
        try {
            $connection = new PDO(
                "mysql:host=rentalpost;port=3306;dbname=rent;charset=utf8mb4",
                "root",
                "example",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
            echo "Connected successfully";
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}