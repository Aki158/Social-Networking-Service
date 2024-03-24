<?php

namespace Database\DataAccess\Interfaces;

use Models\Profile;

interface ProfileDAO
{
    public function create(Profile $profile): bool;
    public function update(Profile $profile, string $username, ?int $age, ?string $location, ?string $hobby, ?string $selfIntroduction, ?string $thumbnailPath, ?string $thumbnailUrl): bool;

    public function getById(int $id): ?Profile;
}