<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Post implements Model {
    use GenericModel;

    public function __construct(
        private int $userId,
        private string $url,
        private ?int $id = null,
        private ?int $replyToId = null,
        private ?string $content = null,
        private ?string $postAppointmentTime = null,
        private ?string $postedAt = null,
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

    public function getReplyToId(): ?int {
        return $this->replyToId;
    }

    public function setReplyToId(int $replyToId): void {
        $this->replyToId = $replyToId;
    }

    public function getUrl(): string {
        return $this->url;
    }

    public function setUrl(string $url): void {
        $this->url = $url;
    }

    public function getContent(): ?string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    public function getPostAppointmentTime(): ?string {
        return $this->postAppointmentTime;
    }

    public function setPostAppointmentTime(string $postAppointmentTime): void {
        $this->postAppointmentTime = $postAppointmentTime;
    }

    public function getPostedAt(): ?string {
        return $this->postedAt;
    }

    public function setPostedAt(string $postedAt): void {
        $this->postedAt = $postedAt;
    }
}