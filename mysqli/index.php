<?php

$connection = new mysqli('localhost', 'root', '', 'second_test', 8111);

if($connection->connect_errno == 0){
    $sql = "SELECT * FROM users";
    $request = $connection->query($sql);

    if($request->num_rows){
        while($row = $request->fetch_assoc()){
            echo $row['name']."<br>";
        }
    }else{
        echo "The table is empty";
    }
}else{
    echo "Sorry, there was an error with the server";
}