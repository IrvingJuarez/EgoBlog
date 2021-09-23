<?php

$str = "Hi, I am a string";
$num = 30;
$numStr = "54";
$anArray = array("1st", "2nd", 3, array());
$aDescriptiveArray = array("name" => "Irving", "last name" => "Juárez", "age" => 20);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_dump in php</title>
</head>
<body>
    <h2>What's used for?</h2>
    <p>I think is useful for debugging, but it is used to know the value of certain variable</p>
    <?php
        echo "<pre>";
            var_dump($str);
        echo "</pre>";

        echo "<pre>";
            var_dump($num);
        echo "</pre>";

        echo "<pre>";
            var_dump($numStr);
        echo "</pre>";

        echo "<pre>";
            var_dump($anArray);
        echo "</pre>";

        echo "<pre>";
            var_dump($aDescriptiveArray);
        echo "</pre>";
    ?>
</body>
</html>