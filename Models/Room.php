<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Room implements Model {
    use GenericModel;

    public function __construct(
        private string $url,
        private ?int $id = null
    ) {}

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getUrl(): string {
        return $this->url;
    }

    public function setUrl(string $url): void {
        $this->url = $url;
    }
}