<?php

namespace Domain;

class Player extends Person {

    private $number;

    public function __construct(string $firstName, string $lastName, string $bDay, int $number)
    {
        $this->number = $number;
        parent::__construct($firstName, $lastName, $bDay);
    }

    public function getFullName(): string
    {
        return parent::getFullName() . ' : ' . $this->number;
    }
}