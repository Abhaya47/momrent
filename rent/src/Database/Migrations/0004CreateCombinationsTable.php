<?php

namespace App\Database\Migrations;

use App\Database\Migration;

class CreateCombinationsTable extends Migration
{
    public function up(){
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS combinations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                room_id INT NOT NULL,
                name VARCHAR(100) NOT NULL UNIQUE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                CONSTRAINT fk_rooms
                    FOREIGN KEY (room_id) REFERENCES rooms(id)
                    ON DELETE CASCADE
                    ON UPDATE CASCADE
            ) ENGINE=InnoDB;
        ");
    }
}