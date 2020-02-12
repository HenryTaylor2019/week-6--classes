<?php

declare(strict_types=1);

class Stringy 
{
    private $newString; 

    public function __construct(string $newString) // Only one parameter needed as there is only one argument
    {
        $this->newString = $newString; // newString holds the new version of the $string variable
    }

    public function lower() : string
    {
         return strtolower($this->newString); //needs method things to change the string
    }

    public function upper()  : string
    {
        return strtoupper($this->newString);
    }

    public function append($concat) : string
    {
        return $this->newString . $concat;
    }

    public function repeat($n) : string
    {
         return str_repeat($this->newString, $n);
    }

}


$string = new Stringy("Na");

// it can lowercase a string
var_dump($string->lower()); // string(2) "na"

// it can uppercase a string
var_dump($string->upper()); // string(2) "NA"

// it can concatenate
var_dump($string->append("blah")); // string(6) "Nablah"

// it can repeat a string
var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa"