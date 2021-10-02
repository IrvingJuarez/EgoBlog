<?php

$theID = $_GET['id'] ?? 1;
$connection = new mysqli('localhost', 'root', '', 'second_test', 8111);

if($connection->connect_errno == 0){
    $sql = "SELECT * FROM users WHERE id = ?";
    $statement = $connection->prepare($sql);
    $statement->bind_param("i", $theID);
    $statement->execute();

    echo "<pre>";
        print_r($statement);
    echo "</pre>";
}else{
    echo "Sorry, there was an error with the server";
}