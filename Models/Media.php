<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Notice implements Model {
    use GenericModel;

    public function __construct(
        private int $requestId,
        private string $requestType,
        private ?int $id = null,
        private ?string $imagePath = null,
        private ?string $thumbnailPath = null,
        private ?string $imageUrl = null,
        private ?string $videoPath = null,
    ) {}

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getRequestId(): int {
        return $this->requestId;
    }

    public function setRequestId(int $requestId): void {
        $this->requestId = $requestId;
    }

    public function getRequestType(): string {
        return $this->requestType;
    }

    public function setRequestType(string $requestType): void {
        $this->requestType = $requestType;
    }

    public function getImagePath(): ?string {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): void {
        $this->imagePath = $imagePath;
    }

    public function getThumbnailPath(): ?string {
        return $this->thumbnailPath;
    }

    public function setThumbnailPath(string $thumbnailPath): void {
        $this->thumbnailPath = $thumbnailPath;
    }

    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): void {
        $this->imageUrl = $imageUrl;
    }

    public function getVideoPath(): ?string {
        return $this->videoPath;
    }

    public function setVideoPath(string $videoPath): void {
        $this->videoPath = $videoPath;
    }
}