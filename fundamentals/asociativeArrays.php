<?php

$person = ["name" => "Irving", "lastName" => "Juárez", "age" => 20, "country" => "México"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
    <h2>What's an associative array?</h2>
    <p>The classic arrays we see in js, for instance, are indexed. We can access to them through an <i>index</i></p>
    <p>However, we can access to arrays through an associative title</p>
    <p>I just created an associative array where I can access to some values of a person. The values of our persona are:</p>
    <p><?php echo "Hi, my name is ".$person["name"]." ".$person["lastName"].", I am ".$person["age"]." years old and I live in ".$person["country"]; ?></p>
</body>
</html>