<?php

class Person{
    function __construct($name, $email, $age, $country){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->country = $country;
    }

    public function getName(){
        echo "Name: $this->name <br>";
        return $this;
    }

    public function getEmail(){
        echo "Email: $this->email <br>";
        return $this;
    }

    public function getAge(){
        echo "Age: $this->age <br>";
        return $this;
    }

    public function getCountry(){
        echo "Country: $this->country <br>";
        return $this;
    }
}

$firstOne = new Person("Irving", "correo@gmail.com", 20, "Mexico");
$firstOne->getName()->getEmail()->getAge()->getCountry();