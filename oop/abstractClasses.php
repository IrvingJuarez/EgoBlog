<?php

abstract class Person{
    public function greetings(){
        return "Salve";
    }
}

class Student extends Person{

}

$varOne = new Student;
echo $varOne->greetings();