<?php

namespace Database\DataAccess\Interfaces;

use Models\Follow;

interface FollowDAO
{
    public function create(Follow $follow): bool;

    public function delete(Follow $follow): bool;

    public function getById(int $id): ?Follow;
}