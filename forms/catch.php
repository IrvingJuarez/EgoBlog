<?php

if(!$_POST){
    header("Location: http://localhost/LiberMeus/forms/structure.php");   
}

$name = $_POST["name"];
$gender = $_POST["gender"];
$country = $_POST["country"];
$terms = $_POST["conditions"];

echo "You are a ".$gender.", who's name is ".$name.". Living in ".$country;
if($terms){
    echo "You accepted the terms and conditions";
}else{
    echo "You didn't accepted the terms and conditions";
}

?>