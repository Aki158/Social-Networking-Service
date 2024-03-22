<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class User implements Model {
    use GenericModel;

    public function __construct(
        private string $username,
        private string $email,
        private string $userType,
        private ?int $id = null,
        private ?string $emailConfirmedAt = null,
        private ?DataTimeStamp $timeStamp = null,
    ) {}

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getUserType(): ?string {
        return $this->userType;
    }

    public function setUserType(string $userType): void {
        $this->userType = $userType;
    }

    public function getEmailConfirmedAt(): ?string {
        return $this->emailConfirmedAt;
    }

    public function setEmailConfirmedAt(string $emailConfirmedAt): void {
        $this->emailConfirmedAt = $emailConfirmedAt;
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