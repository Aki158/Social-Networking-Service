<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Notice implements Model {
    use GenericModel;

    public function __construct(
        private int $userId,
        private int $visitedId,
        private int $referenceId,
        private string $referenceType,
        private ?int $id = null,
        private ?string $confirmedAt = null
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

    public function getVisitedId(): int {
        return $this->visitedId;
    }

    public function setVisitedId(int $visitedId): void {
        $this->visitedId = $visitedId;
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

    public function getConfirmedAt(): ?string {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(string $confirmedAt): void {
        $this->confirmedAt = $confirmedAt;
    }
}