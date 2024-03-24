<?php

namespace Database\DataAccess\Interfaces;

use Models\Repost;

interface RepostDAO
{
    public function create(Repost $repost): bool;

    public function delete(Repost $repost): bool;

    public function getById(int $id): ?Repost;
}