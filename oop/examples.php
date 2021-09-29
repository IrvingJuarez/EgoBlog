<?php

class Person{
    public $name;
    public $lastName;
    public $age;
    public $country;

    public function greetings(){
        echo "Hello world";
    }
}

$personOne = new Person;
$personOne->name = "Irving";
$personOne->lastName = "Juárez";
$personOne->age = 20;
$personOne->country = "México";
// $personOne->greetings();
echo $personOne->name." is ".$personOne->age." years old";

?>