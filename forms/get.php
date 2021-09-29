<?php

if(!$_GET){
    header("Location: http://localhost/LiberMeus/forms/structure.php");
}

$name = htmlspecialchars($_GET["name"]);
$gender = htmlspecialchars($_GET["gender"]);
$country = htmlspecialchars($_GET["country"]);
$terms = htmlspecialchars($_GET["conditions"]) || false;

echo "Your name is ".$name.", you live in ".$country.", and you are a ".$gender;
echo "<br>";
if($terms){
    echo "You accepted the terms and conditions";
}

?>