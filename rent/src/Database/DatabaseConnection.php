<?php

namespace App\Database;

use PDO;
use PDOException;

class DatabaseConnection
{
    private PDO $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO(
                "mysql:host=rentalpost;port=3306;dbname=rent;charset=utf8mb4",
                "root",
                "example",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }
        catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection(): PDO
    {
        if (!isset($this->connection)) {
            $this->__construct();
        }
        return $this->connection;
    }
}