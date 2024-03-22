<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class UserRoom implements Model {
    use GenericModel;

    public function __construct(
        private int $userId,
        private int $roomId,
        private ?int $id = null,
    ) {}

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function getRoomId(): int {
        return $this->roomId;
    }

    public function setRoomId(int $roomId): void {
        $this->roomId = $roomId;
    }
}