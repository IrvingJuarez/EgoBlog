<?php

$value = 0;

function prepareStm($connection, $theSql){
    $statement = $connection->prepare($theSql);
    $statement->execute();
    return $statement;
}

function come($connection){
    global $value;
    $statement = prepareStm($connection, "SELECT counter FROM views");
    $result = $statement->get_result();
    $value = $result->fetch_assoc()['counter'];
}

function go($connection){
    global $value;
    $value += 1;
    $statement = prepareStm($connection, "UPDATE views SET counter = $value");
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