<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateProfileTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Profile (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT UNIQUE NOT NULL,
                age INT,
                location VARCHAR(255),
                hobby VARCHAR(255),
                self_introduction TEXT,
                thumbnail_path VARCHAR(255),
                thumbnail_url VARCHAR(255),
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Profile"
        ];
    }
}