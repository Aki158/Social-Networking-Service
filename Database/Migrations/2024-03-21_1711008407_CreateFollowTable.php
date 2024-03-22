<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateFollowTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Follow (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                followed_id INT NOT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
                FOREIGN KEY (followed_id) REFERENCES User(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Follow"
        ];
    }
}