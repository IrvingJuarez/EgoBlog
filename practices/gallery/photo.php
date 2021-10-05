<?php

require "functions.php";
$errors = "";

if( isset($_GET["img"]) ){
    $connection = dbConnection();
    if( $connection->errno == 0 ){
        $imgGET = "imgs/".$_GET["img"];
        $sql = "SELECT path, title, description FROM pics WHERE path = ? LIMIT 1";
        $statement = $connection->prepare($sql);
        $statement->bind_param("s", $imgGET);
        $statement->execute();

        $result = $statement->get_result();

        if( $result ){
            $temp = $result->fetch_assoc();
            $url = $imgGET;
            $title = $temp['title'];
            $description = $temp['description'];
        }else{
            $errors .= "<span class='err'>Sorry, the img doesn´t exist</span>";
        }
    }else{
        $errors .= "<span class='err'>Sorry, there was an error with the db. Try later.</span>";
    }
}else{
    header("Location: index.php");
}

require "views/photo.view.php";

?>