<?php

//$name = $_GET['name'];
//$name = isset($_GET['name']) ? $_GET['name'] : "Anonymus";
$name = $_GET['name'] ?? "Anonymus";

echo $name;

?>