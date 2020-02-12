<?php

declare(strict_types=1);

class Car 
{
    private $miles = 0;
    private $numberPlate;
    private $make;

    public function __construct(string $getNumberPlate, string $getMake)
    {
        $this->numberPlate = $getNumberPlate;
        $this->make = $getMake;
    }
        public function getNumberPlate() : string
        {
            return $this->numberPlate;
        }

        public function getMake() : string
        {
            return $this->make;
        }

        public function addJourney($distance) : void
        {
            $this->miles += $distance;
        }

        public function getMileage() : int
        {
            return $this->miles;
        }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);