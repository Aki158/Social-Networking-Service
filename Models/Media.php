<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Media implements Model {
    use GenericModel;

    public function __construct(
        private int $referenceId,
        private string $referenceType,
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

    public function getReferenceId(): int {
        return $this->referenceId;
    }

    public function setReferenceId(int $referenceId): void {
        $this->referenceId = $referenceId;
    }

    public function getReferenceType(): string {
        return $this->referenceType;
    }

    public function setReferenceType(string $referenceType): void {
        $this->referenceType = $referenceType;
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