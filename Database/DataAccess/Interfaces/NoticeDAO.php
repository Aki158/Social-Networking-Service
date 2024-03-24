<?php

namespace Database\DataAccess\Interfaces;

use Models\Notice;

interface NoticeDAO
{
    public function create(Notice $notice): bool;

    public function update(Notice $notice, string $confirmedAt): bool;

    public function delete(Notice $notice): bool;

    public function getById(int $id): ?Notice;

    public function getByReference(int $referenceId, string $referenceType): ?Notice;
}