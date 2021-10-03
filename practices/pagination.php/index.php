<?php

require("index.view.php");

$connection = new mysqli('localhost', 'root', '', 'pagination', 8080);
$titles = array(
    "Lorem ipsum dolor sit amet.",
    "consectetur adipisicing elit.",
    "Eligendi possimus, modi similique",
    "Recusandae praesentium pariatur ab",
    "A quia obcaecati sequi deleniti",
    "Voluptates dolor facilis expedita",
    "Laudantium, sint quos",
    "Nobis, explicabo?",
    "Nemo odio earum eaque",
    "Sint quis facere repudiandae",
    "Cumque rerum possimus",
    "Magnam aliquid adipisci commodi",
    "Impedit assumenda qui",
    "Odit quisquam ea et",
    "Lorem ipsum, dolor",
    "Sit amet consectetur",
    "Adipisicing elit",
    "Nostrum numquam dolor",
    "Enim iste veniam",
    "Aliquam at corrupti"
);

if($connection->connect_errno == 0){
    $sql = "INSERT INTO articles (title) VALUES(?)";
    
    foreach($titles as $title){
        $statement = $connection->prepare($sql);
        $statement->bind_param("s", $the_title);

        $the_title = $title;
        $statement->execute();
    }
    
    if($connection->affected_rows >= 1){
        echo "The insertion was successfully <br>";
    }
}else{
    echo "Sorry, there was an error with the server";
}