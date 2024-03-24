<?php

namespace Database\DataAccess\Interfaces;

use Models\Heart;

interface HeartDAO
{
    public function create(Heart $heart): bool;

    public function delete(Heart $heart): bool;

    public function getById(int $id): ?Heart;
}