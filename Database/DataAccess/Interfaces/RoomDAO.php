<?php

namespace Database\DataAccess\Interfaces;

use Models\Room;

interface RoomDAO
{
    public function create(Room $room): bool;

    public function delete(Room $room): bool;

    public function getById(int $id): ?Room;
}