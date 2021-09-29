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
        echo "Hello, my name is $this->name, I am $this->age years old and I live in $this->country <br>";
    }
}

$personOne = new Person("Irving", 20, "Mexico");
$personOne->greeting();

$personTwo = new Person("Carl", 50, "Germany");
$personTwo->greeting();

?>