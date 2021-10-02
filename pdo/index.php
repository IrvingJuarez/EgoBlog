<?php

$theId = $_GET['id'] ?? 2;

try{
    $connection = new PDO('mysql:host=localhost:8111;dbname=second_test', 'root', '');

    // $result = $connection->query('SELECT * FROM users WHERE id = '.$theId);

    // foreach($result as $i){
    //     echo "The name is: ".$i['name']." and the id: ".$i['id']."<br>";
    // }

    $query = $connection->prepare("SELECT * FROM users");
    $query->execute();

    $result = $query->fetchAll();
    foreach($result as $item){
        echo "The name is ".$item['name']." and the id is ".$item['id']."<br>";
    }
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

?>