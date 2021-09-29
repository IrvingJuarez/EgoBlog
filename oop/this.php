<?php

class Person{
    public $name;
    public $age;
    public $country;

    public function greeting(){
        echo "Hello, my name is $this->name, I am $this->age years old and I live in $this->country <br>";
    }
}

$personOne = new Person;
$personOne->name = "Irving";
$personOne->age = 20;
$personOne->country = "México";
$personOne->greeting();

$personTwo = new Person;
$personTwo->name = "Carl";
$personTwo->age = 50;
$personTwo->country = "Germany";
$personTwo->greeting();

?>