<?php

require "functions.php";

$errors = "";
$success = false;

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

function addToDB($connection, $path){
    $sql = "INSERT INTO pics (path, title, description) VALUES(?, ?, ?)";
    $statement = $connection->prepare($sql);
    $statement->bind_param("sss", $path, $_POST["title"], $_POST["description"]);
    $statement->execute();

    if($connection->affected_rows >= 1){
        global $success;
        move_uploaded_file( $_FILES["photo"]["tmp_name"], $path );
        echo "<span class='succ'>The photo was uploaded correctly</span>";
        $success = true;
    }else{
        echo "<span class='err'>There was an error with the db. Try later.</span>";
    }
}

function uploadPhoto(){
    $dir = "imgs/";
    $path = $dir.$_FILES["photo"]["name"];

    $connection = dbConnection();
    if($connection->errno == 0){
        $sql = "SELECT path FROM pics WHERE path = ? LIMIT 1";
        $statement = $connection->prepare($sql);
        $statement->bind_param("s", $path);
        $statement->execute();

        $result = $statement->fetch();

        if($result){
            echo "<span class='err'>Sorry, a file with the same name already exists in our db</span>";
        }else{
            addToDB($connection, $path);
        }
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

function printValue($value){
    global $success;
    if( isset($value) && $success == false ){
        echo $value;
    }else{
        echo "";
    }
}

if( isset($_POST["upload"]) ){
    $title = clean($_POST["title"]);
    $text = clean( $_POST["description"] );
}

require "views/upload.view.php";

?>