<?php

namespace App\Database\Migrations;

use App\Database\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS rooms (
                id INT AUTO_INCREMENT PRIMARY KEY,
                floor_id INT NOT NULL,
                name VARCHAR(100),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                CONSTRAINT fk_rooms_floor
                    FOREIGN KEY (floor_id)
                    REFERENCES floors(id)
                    ON DELETE CASCADE
                    ON UPDATE CASCADE   
            ) ENGINE=InnoDB;
        ");
    }
}