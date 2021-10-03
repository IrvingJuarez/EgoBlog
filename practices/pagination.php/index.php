<?php

function renderLi($id, $flag){
    $url = "http://localhost/LiberMeus/practices/pagination.php/?page=$id";

    if($flag){
        return "<li class='active'><a href='".$url."'>".$id."</a></li>";
    }else{
        return "<li><a href='".$url."'>".$id."</a></li>";
    }
}

$connection = new mysqli('localhost', 'root', '', 'pagination', 8080);

if($connection->connect_errno == 0){
    $rowRequest = $connection->query("SELECT id FROM articles");
    $rowNum = $rowRequest->num_rows;

    if($rowNum >= 1){
        $page = $_GET['page'] ?? 1;
        $sql = "SELECT * FROM articles LIMIT ?, ?";
        
        $request = $connection->prepare($sql);
        $request->bind_param("ii", $beginning, $limit);
        $limit = 5;
        $beginning = ($page > 1) ? ($page * $limit - $limit) : 0;
        $request->execute();
    
        $result = $request->get_result();
    }

}else{
    echo "Sorry, there was an error with the server";
}

require("index.view.php");