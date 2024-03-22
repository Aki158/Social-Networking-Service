<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateMessageTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Message (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                room_id INT NOT NULL,
                secret_content TEXT,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
                FOREIGN KEY (room_id) REFERENCES Room(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Message"
        ];
    }
}