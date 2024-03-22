<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateRoomTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Room (
                id INT PRIMARY KEY AUTO_INCREMENT
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Room"
        ];
    }
}