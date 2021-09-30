<?php

class Person{
    public $name;
    public $age;
    public $country;

    function __construct($name, $age, $country){
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function greeting(){
        return "Hello, I am a person. My name is $this->name, I am $this->age years old and I live in $this->country <br>";
    }
}

$character1 = new Person("Alberto", 40, "Denmark");
echo $character1->greeting();

class Student extends Person{
    function __construct($name, $age, $country, $school){
        parent::__construct($name, $age, $country);
        $this->school = $school;
    }

    public function greeting(){
        return "Hello, I am a student. My name is $this->name, I am $this->age years old and I live in $this->country. Finally, I study in $this->school <br>";
    }
}

$character2 = new Student("Sophia", 14, "Germany", "University of Texas");
echo $character2->greeting();