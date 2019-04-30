<?php

namespace Domain;

abstract class Person {

    private $firstName;
    private $lastName;
    private $bDay;

    public function __construct(string $firstName, string $lastName, string $bDay)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->bDay = \DateTime::createFromFormat('d-m-Y', $bDay);
    }
    
    public function getFullName() : string
    {
        return $this->firstName . ' ' . $this->lastName . ' ' . $this->bDay->format('Y');
    }
}

