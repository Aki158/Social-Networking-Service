<?php

namespace Models;

use Models\Interfaces\Model;
use Models\Traits\GenericModel;

class Room implements Model {
    use GenericModel;

    public function __construct(
        private ?int $id = null,
    ) {}

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
}