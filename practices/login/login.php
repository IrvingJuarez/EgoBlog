<?php

$errors = "";

function emptiness($variable, $msg){
    global $errors;
    if( empty($variable) ){
        $errors .= "<span>Please add a <i>$msg</i></span>";
    }
}

function clear($variable){
    $variable = strtolower($variable);
    $variable = filter_var($variable, FILTER_SANITIZE_STRING);
    $variable = htmlspecialchars($variable);
    return $variable;
}

function dbConnect($name, $pw){
    $connection = new mysqli('localhost', 'root', '', 'logination', 8080);

    if($connection->errno == 0){
        $sql = "SELECT id FROM users WHERE name = ? and password = ? LIMIT 1";
        $statement = $connection->prepare($sql);
        $statement->bind_param("si", $name, $pw);
        $statement->execute();

        $result = $statement->fetch();

        if($result){
            header("Location: content.php");
        }else{
            echo "<span>The user or the password are wrong, try again or log-in.</span>";
        }
    }else{
        echo "<span>Bad</span>";
    }
}

if( isset($_POST['submit']) ){
    $name = clear( $_POST['name'] );
    $password = (empty($_POST['password'])) ? "" : hash("crc32b", $_POST['password'] );
}

require "views/login.view.php";