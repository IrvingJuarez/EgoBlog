<?php

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

function photoComprobation(){
    if( isset($_FILES["photo"]["tmp-name"]) ){
        echo "<span>We can continue</span>";
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