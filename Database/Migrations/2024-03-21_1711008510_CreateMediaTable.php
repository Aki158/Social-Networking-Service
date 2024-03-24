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
                reference_id INT NOT NULL,
                reference_type VARCHAR(255) NOT NULL,
                image_path VARCHAR(255),
                thumbnail_path VARCHAR(255),
                image_url VARCHAR(255),
                video_path VARCHAR(255)
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