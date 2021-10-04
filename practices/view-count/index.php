<?php

function counter(){
    $connection = new mysqli('localhost', 'root', '', 'counting', 8080);

    if($connection->errno == 0){
        $sql = "SELECT counter FROM views";
        $statement = $connection->prepare($sql);
        $statement->execute();

        $result = $statement->get_result();
        echo "<h2>The number of views in this website are: <i>".$result->fetch_assoc()['counter']."</i></h2>";
    }else{
        echo "<h2>There was a problem with the database</h2>";
    }
}

require "index.view.php";

?>