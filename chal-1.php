<?php

declare(strict_types=1);

class Phone 
{
    private $make;
    private $model;
    
    // Create a public function that constructs(??!! two probvate variables) 
    public function __construct(string $make, string $model) 
    {
        // Assign 
        $this->make = $make;
        $this->model = $model;
    }

    public function make()
    {
        return $this->make;
    }
    public function model()
    {
        return $this->model;
    }
}

// create three phones
$iPhone = new Phone("Apple", "iPhone XS");
$galaxy = new Phone("Samsung", "Galaxy");
$retro = new Phone("Nokia", "3210");

// use methods to find out model/make
var_dump($iPhone->model()); // string(9) "iPhone XS"
var_dump($retro->make()); // string(5) "Nokia"
var_dump($galaxy->make()); // string(7) "Samsung"
var_dump($iPhone->make()); // string(5) "Apple"

