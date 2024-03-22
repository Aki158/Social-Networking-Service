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
        private string $noticeType,
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

    public function getNoticeType(): string {
        return $this->noticeType;
    }

    public function setNoticeType(string $noticeType): void {
        $this->noticeType = $noticeType;
    }

    public function getReferenceId(): int {
        return $this->referenceId;
    }

    public function setReferenceId(int $referenceId): void {
        $this->referenceId = $referenceId;
    }

    public function getConfirmedAt(): ?string {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(string $confirmedAt): void {
        $this->confirmedAt = $confirmedAt;
    }
}