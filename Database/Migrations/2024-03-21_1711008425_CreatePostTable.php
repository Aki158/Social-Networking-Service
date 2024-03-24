<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreatePostTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Post (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                reply_to_id INT,
                url VARCHAR(255) NOT NULL,
                content TEXT,
                post_appointment_time DATETIME,
                posted_at DATETIME,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Post"
        ];
    }
}