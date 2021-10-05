<?php

require "functions.php";

$connection = dbConnection();
if( $connection->errno == 0 ){
    $sql = "SELECT path FROM pics";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->get_result();
}else{
    echo "There was a problem with the database. Try later.";
}

require "views/index.view.php";

?>