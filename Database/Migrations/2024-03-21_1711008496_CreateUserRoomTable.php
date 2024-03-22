<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateUserRoomTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE UserRoom (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                room_id INT NOT NULL,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
                FOREIGN KEY (room_id) REFERENCES Room(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE UserRoom"
        ];
    }
}