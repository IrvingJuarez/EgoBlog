<?php

$errors = "";
$success = "";

function gettingReady($var, $status){
    if($status == "string"){
        $var = filter_var($var, FILTER_SANITIZE_STRING);
    }else if($status == "email"){
        $var = filter_var($var, FILTER_SANITIZE_EMAIL);
    }
    $var = trim($var);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(empty($name)){
        $errors .= "Please add a name <br>";
    }else {
        $name = gettingReady($name, "string");
    }

    if(empty($email)){
        $errors .= "Please add an email address <br>";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= "Please insert a valid email address <br>";
    }else{
        $email = gettingReady($email, "email");
    }

    if(empty($message)){
        $errors .= "Please add a message <br>";
    }else{
        $message = gettingReady($message, "string");
    }

    if(empty($errors)){
        $success = "The data was sent successfully";
    }
}

require("index.view.php");

?>