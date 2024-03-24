<?php

namespace Database\Migrations;

use Database\SchemaMigration;

class CreateUserTable implements SchemaMigration
{
    public function up(): array
    {
        return [
            "CREATE TABLE User (
                id INT PRIMARY KEY AUTO_INCREMENT,
                username VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                user_type VARCHAR(255) NOT NULL,
                email_confirmed_at DATETIME,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )"
        ];
    }

    public function down(): array
    {
        return [
            "DROP TABLE User"
        ];
    }
}