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

function dbConnect($username, $password){
    $connection = new mysqli('localhost', 'root', '', 'logination', 8080);

    if($connection->connect_errno == 0){
        $sqlNameComp = "SELECT * FROM users WHERE name = ? LIMIT 1";
        $statementComp = $connection->prepare($sqlNameComp);
        $statementComp->bind_param("s", $username);
        $statementComp->execute();

        $result = $statementComp->fetch();

        if($result){
            echo "<span>That user name already exists. Try again.</span>";
        }else{
            $sql = "INSERT INTO users (name, password) VALUES(?, ?)";
            $statement = $connection->prepare($sql);
            $statement->bind_param("ss", $username, $password);
            $statement->execute();
    
            if($connection->affected_rows >= 1){
                header("Location: login.php");
            }
        }

    }else{
        echo "<span class='fail'>There was a problem with our db. Try later.</span>";
    }
}

if(isset($_POST['submit'])){
    $username = clean($_POST['name']);
    $password = hash("crc32b", $_POST['password']);
    $password2 = hash("crc32b", $_POST['password2']);
    $pwc = "Not empty";

    if( !empty($password) && !empty($password2) ){
        if($password == $password2){
            $pwc = "";
        }
    }

    // echo "$username, $password, $password2";
}

require "views/register.view.php";