<?php

$friends = [
    ["name" => "Agus", "age" => 28, "country" => "Uruguay"],
    ["name" => "Norvys", "age" => 40, "country" => "Venezuela"],
    ["name" => "Vivi", "age" => 35, "country" => "Colombia"],
    ["name" => "Luisana", "age" => 27, "country" => "Peru"]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional Array</title>
</head>
<body>
    <h2>What is a multidimentional array?</h2>
    <p>Pretty straight forward, is an array inside another, with this we can 'organize' the data better</p>
    <h2>My friends</h2>
    <p><?php echo "Name: ".$friends[0]["name"].", Age: ".$friends[0]["age"]." and Country: ".$friends[0]["country"]; ?></p>
    <p><?php echo "Name: ".$friends[1]["name"].", Age: ".$friends[1]["age"]." and Country: ".$friends[1]["country"]; ?></p>
    <p><?php echo "Name: ".$friends[2]["name"].", Age: ".$friends[2]["age"]." and Country: ".$friends[2]["country"]; ?></p>
    <p><?php echo "Name: ".$friends[3]["name"].", Age: ".$friends[3]["age"]." and Country: ".$friends[3]["country"]; ?></p>
</body>
</html>