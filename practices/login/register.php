<?php

session_start();

if(isset($_SESSION['user'])){
    header("Location: index.php");
}

$errors = "";

function clean($variable){
    $variable = strtolower($variable);
    $variable = filter_var($variable, FILTER_SANITIZE_STRING);
    return $variable;
}

function emptiness($variable, $msg){
    if(empty($variable)){
        global $errors;
        $errors .= "<span>Please add the <i>$msg</i></span>";
    }
}

if(isset($_POST['submit'])){
    $username = clean($_POST['name']);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $pwc = "Not empty";

    if( !empty($password) && !empty($password2) ){
        if($password == $password2){
            $pwc = "";
        }
    }

    // echo "$username, $password, $password2";
}

require "views/register.view.php";