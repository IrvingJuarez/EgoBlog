<?php

try{
    $connection = new PDO('mysql:host=localhost:8111;dbname=second_test', 'root', '');
    echo "Successful connection to the database";
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}

?>