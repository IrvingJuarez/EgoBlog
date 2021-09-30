<?php

class User{
    protected $name;

    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    function introduce(){
        return "Salve, nomen mihi $this->name est et email mihi $this->email est";
    }
}

class Admin extends User{
    function __construct($name, $email){
        parent::__construct($name, $email);
    }
}

$person1 = new User("Irving", "email@gmail.com");
echo $person1->introduce();

$admin1 = new Admin("Sophia", "admin@gmail.com");
echo $admin1->name;