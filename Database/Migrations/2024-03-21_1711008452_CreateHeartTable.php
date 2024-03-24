<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateHeartTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Heart (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                liked_user_id INT NOT NULL,
                post_id INT NOT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
                FOREIGN KEY (liked_user_id) REFERENCES User(id) ON DELETE CASCADE,
                FOREIGN KEY (post_id) REFERENCES Post(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Heart"
        ];
    }
}