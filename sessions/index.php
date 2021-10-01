<?php

session_start();

$_SESSION['name'] = "Irving";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h2>Home</h2>
    <a href="second.php">Go to the next page</a>
</body>
</html>