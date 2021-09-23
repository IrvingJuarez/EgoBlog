<?php
    function greetings($name){
        echo "Hello ".$name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function with php</title>
</head>
<body>
    <h2>Using a function with a parameter to greet someone</h2>
    <p><?php greetings("Irving") ?></p>
    <p><?php greetings("Vladimir") ?></p>
    <p><?php greetings("Juárez") ?></p>
    <p><?php greetings("Cuero") ?></p>
</body>
</html>