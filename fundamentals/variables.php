<?php

$name = "Irving";
$age = 20;
$cheerings = 'Hello, '.$name.' is my name and I am '.$age.' years old';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $cheerings; ?></h2>
    <p>The variable type of my name is <i><?php echo gettype($name); ?></i></p>
    <p>The variable type of my age is <i><?php echo gettype($age); ?></i></p>
</body>
</html>