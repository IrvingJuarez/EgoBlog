<?php

function counter(){
    $connection = new mysqli('localhost', 'root', '', 'counting', 8080);

    if($connection->errno == 0){
        echo "<h2>The current webpage has <i>$result</i> views</h2>";
    }else{
        echo "<h2>There was a problem with the database</h2>";
    }
}

require "index.view.php";

?>