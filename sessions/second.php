<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second page</title>
</head>
<body>
    <?php 
        if($_SESSION){
            echo "<h2>Hello, ".$_SESSION['name']." </h2>";
        }else{
            echo "<h2>You need to log in before access to this content</h2>";
        }
    ?>
    <a href="logout.php">Log out</a>
</body>
</html>