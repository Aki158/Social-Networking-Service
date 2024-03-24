<?php

namespace Database\DataAccess\Interfaces;

use Models\Media;

interface MediaDAO
{
    public function create(Media $media): bool;

    public function delete(Media $media): bool;

    public function getById(int $id): ?Media;

    public function getByReference(int $referenceId, string $referenceType): ?Media;
}