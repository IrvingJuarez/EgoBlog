<?php

// $ghostVar = "nothing";
$realVar = "something";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset in php</title>
</head>
<body>
    <h2>What 'isset' is used for in php?</h2>
    <p>this function is pretty straight forward to understand as long as you can understand english. In short, this function works to know is a variable is already settled or not. It returns a boolean value</p>
    <p>Here we can see the value of isset() of a variable not settled: <?php echo isset($ghostVar); ?></p>
    <p>Here we can see the value of isset() of a variable already settled: <?php echo isset($realVar); ?></p>
</body>
</html>