<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateMediaTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Media (
                id INT PRIMARY KEY AUTO_INCREMENT,
                request_id INT NOT NULL,
                request_type VARCHAR(255) NOT NULL,
                image_path VARCHAR(255),
                thumbnail_path VARCHAR(255),
                image_url VARCHAR(255),
                video_path VARCHAR(255),
                FOREIGN KEY (request_id) REFERENCES Post(id) ON DELETE CASCADE,
                FOREIGN KEY (request_id) REFERENCES Message(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Media"
        ];
    }
}