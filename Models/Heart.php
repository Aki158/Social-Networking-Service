<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Heart implements Model {
    use GenericModel;

    public function __construct(
        private int $userId,
        private int $likedUserId,
        private int $postId,
        private ?int $id = null,
        private ?DataTimeStamp $timeStamp = null,
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

    public function getLikedUserId(): int {
        return $this->likedUserId;
    }

    public function setLikedUserId(int $likedUserId): void {
        $this->likedUserId = $likedUserId;
    }


    public function getPostId(): int {
        return $this->postId;
    }

    public function setPostId(int $postId): void {
        $this->postId = $postId;
    }

    public function getTimeStamp(): ?DataTimeStamp
    {
        return $this->timeStamp;
    }

    public function setTimeStamp(DataTimeStamp $timeStamp): void
    {
        $this->timeStamp = $timeStamp;
    }
}