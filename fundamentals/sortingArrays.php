<?php

$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Octuber", "November", "December"];
$numbers = [12, 98, 65, 82, 16, 82, 65, 28, 31];
$blend = ["Marcus", 83, "Stephanus", 94, 71, "Puella", "Vir", 54, "Ludus"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting arrays</title>
</head>
<body>
    <p>We have two ways to sort arrays, up down and viceversa. That's why there are 2 function that help us with these 2 sorting types</p>
    <ul>
        <li>sort(array)</li>
        <li>rsort(array)</li>
    </ul>
    <p>Now I will sort three arrays using these both sorting types</p>
    <h2>Normal array</h2>
    <ul>
        <?php
            foreach($months as $month){
                echo "<li>".$month."</li>";
            }
        ?>
    </ul>
    <h2>Sorted array</h2>
    <ul>
        <?php
            sort($months);
            foreach($months as $month){
                echo "<li>".$month."</li>";
            }
        ?>
    </ul>
    <h2>Reverse sortly array</h2>
    <ul>
        <?php
            rsort($months);
            foreach($months as $month){
                echo "<li>".$month."</li>";
            }
        ?>
    </ul>
    <hr>
    <h2>That's good enough, but what happens with numbers?</h2>
    <h3>Original array</h3>
    <ul>
        <?php
            foreach($numbers as $number){
                echo "<li>".$number."</li>";
            }
        ?>
    </ul>
    <h3>Sorted array</h3>
    <ul>
        <?php
            sort($numbers);
            foreach($numbers as $number){
                echo "<li>".$number."</li>";
            }
        ?>
    </ul>
    <h3>Reverse Sorted array</h3>
    <ul>
        <?php
            rsort($numbers);
            foreach($numbers as $number){
                echo "<li>".$number."</li>";
            }
        ?>
    </ul>
    <hr>
    <h2>Ok, so good so far, but what if I merge string and numbers in an array</h2>
    <h3>Original array</h3>
    <ul>
        <?php
            foreach($blend as $value){
                echo "<li>".$value."</li>";
            }
        ?>
    </ul>
    <h3>Sorted array</h3>
    <ul>
        <?php
            sort($blend);
            foreach($blend as $value){
                echo "<li>".$value."</li>";
            }
        ?>
    </ul>
</body>
</html>