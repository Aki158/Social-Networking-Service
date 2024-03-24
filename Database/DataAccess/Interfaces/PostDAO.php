<?php

namespace Database\DataAccess\Interfaces;

use Models\Post;
use Models\Media;

interface PostDAO
{
    public function create(Post $post, ?Media $media): bool;

    public function delete(Post $post): bool;

    public function getById(int $id): ?Post;
}