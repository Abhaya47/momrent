<?php

namespace App\Database\Migrations;

use App\Database\Migration;

class CreateFloorsTable extends Migration
{
    public function up(){
        $this->db->exec("
            CREATE TABLE IF NOT EXISTS floors (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL UNIQUE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
    }
}