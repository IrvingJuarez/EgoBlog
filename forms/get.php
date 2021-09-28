<?php

if(!$_GET){
    header("Location: http://localhost/LiberMeus/forms/structure.php");
}

$name = $_GET["name"];

echo "Your name is ".htmlspecialchars($name);

?>