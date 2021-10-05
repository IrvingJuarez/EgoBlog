<?php

require "functions.php";

$errors = "";

function emptiness($variable, $msg){
    global $errors;
    if( empty($variable) ){
        $errors .= "<span class='err'>Please add a <i>$msg</i></span>";
    }
}

function clean($str){
    $str = filter_var($str, FILTER_SANITIZE_STRING);
    $str = htmlspecialchars($str);
    return $str;
}

function uploadPhoto(){
    $dir = "imgs/";
    $path = $dir.$_FILES["photo"]["name"];

    $connection = dbConnection();
    if($connection->errno == 0){
        echo "<span class='succ'>The connection with the database was successful</span>";
        // move_uploaded_file($_FILES["photo"]["tmp_name"], $path);
    }else{
        echo "<span class='err'>There was an error with the database. Try later.</span>";
    }
}

function photoComprobation(){
    global $continue;
    if( $_FILES["photo"]["tmp_name"] ){
        uploadPhoto();
    }else{
        echo "<span class='err'>Please add a <i>photo</i> to upload</span>";
    }
}

if( isset($_POST["upload"]) ){
    $title = clean($_POST["title"]);
    $text = clean( $_POST["description"] );
}

require "views/upload.view.php";

?>