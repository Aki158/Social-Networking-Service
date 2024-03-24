<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateNoticeTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE Notice (
                id INT PRIMARY KEY AUTO_INCREMENT,
                user_id INT NOT NULL,
                visited_id INT NOT NULL,
                reference_id INT NOT NULL,
                reference_type VARCHAR(255) NOT NULL,
                confirmed_at DATETIME,
                FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
                FOREIGN KEY (visited_id) REFERENCES User(id) ON DELETE CASCADE
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE Notice"
        ];
    }
}