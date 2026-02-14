<?php

namespace App\Database\Migrations;

use App\Database\Migration;

class CreateRentersTable extends Migration
{
    public function up(){
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS renters (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                identifier VARCHAR(255) NOT NULL UNIQUE,
                email VARCHAR(255) NULL,
                phone_number VARCHAR(25),
                status VARCHAR(100) NOT NULL,
                combination VARCHAR(100) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                deleted_at TIMESTAMP NULL DEFAULT NULL,
                CONSTRAINT fk_combinations
                    FOREIGN KEY (combination) REFERENCES combinations (name)
                    ON DELETE CASCADE
                    ON UPDATE CASCADE
            ) ENGINE=InnoDB;
        ");
    }
}