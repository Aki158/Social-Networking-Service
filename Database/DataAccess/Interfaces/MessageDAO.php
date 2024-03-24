<?php

namespace Database\DataAccess\Interfaces;

use Models\Message;
use Models\Media;

interface MessageDAO
{
    public function create(Message $message, Media $media): bool;

    public function delete(Message $message): bool;

    public function getById(int $id): ?Message;
}