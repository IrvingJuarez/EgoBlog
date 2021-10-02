<?php

$connection = new mysqli('localhost', 'root', '', 'second_test', 8111);

if($connection->connect_errno == 0){
    $sql = "UPDATE users SET email = 'darwin@apes' WHERE name = 'Darwin'";
    $connection->query($sql);

    if($connection->affected_rows){
        echo "The number of affected rows were: ".$connection->affected_rows;
    }
}else{
    echo "Sorry, there was an error with the server";
}