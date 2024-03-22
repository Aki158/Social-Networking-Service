<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Profile implements Model {
    use GenericModel;

    public function __construct(
        private int $userId,
        private ?int $id = null,
        private ?int $age = null,
        private ?string $location = null,
        private ?string $hobby = null,
        private ?string $selfIntroduction = null,
        private ?string $thumbnailPath = null,
        private ?string $thumbnailUrl = null,
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

    public function getAge(): ?int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->id = $age;
    }

    public function getLocation(): ?string {
        return $this->location;
    }

    public function setLocation(string $location): void {
        $this->location = $location;
    }

    public function getSelfIntroduction(): ?string {
        return $this->selfIntroduction;
    }

    public function setSelfIntroduction(string $selfIntroduction): void {
        $this->selfIntroduction = $selfIntroduction;
    }
    public function getThumbnailPath(): ?string {
        return $this->thumbnailPath;
    }

    public function setThumbnailPath(string $thumbnailPath): void {
        $this->thumbnailPath = $thumbnailPath;
    }

    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(string $thumbnailUrl): void {
        $this->thumbnailUrl = $thumbnailUrl;
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