<?php

$theId = $_GET['id'];

try{
    $connection = new PDO('mysql:host=localhost:8111;dbname=second_test', 'root', '');
    // echo "Successful connection to the database";

    $result = $connection->query('SELECT * FROM users WHERE id = '.$theId);

    foreach($result as $i){
        echo "The name is: ".$i['name']." and the id: ".$i['id']."<br>";
    }
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

?>