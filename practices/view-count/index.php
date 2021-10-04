<?php

$value = 0;

function come($connection){
    global $value;
    $sql = "SELECT counter FROM views";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->get_result();
    $value = $result->fetch_assoc()['counter'];
}

function go($connection){
    global $value;
    $value += 1;
    $sql = "UPDATE views SET counter = $value";
    $statement = $connection->prepare($sql);
    $statement->execute();
}

function counter(){
    global $value;
    $connection = new mysqli('localhost', 'root', '', 'counting', 8080);
    
    if($connection->errno == 0){
        come($connection);
        go($connection);
        echo "<h2>The number of views in this website are: <i>".$value."</i></h2>";
    }else{
        echo "<h2>There was a problem with the database</h2>";
    }
}

require "index.view.php";

?>