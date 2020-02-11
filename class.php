<?php

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function fullName()
    {
        return "{$this->firstName} {$this->lastName}";
    }
}

$mark = new Person ("Mark", "Wales", 35);
$jack = new Person ("Jack", "Sparrow", 35);

var_dump($mark->fullName());
