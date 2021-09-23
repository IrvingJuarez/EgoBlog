<?php

$age = 17;
$currentMonth = "November";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statement</title>
</head>
<body>
    <p>The <i>if statement</i> is used to chosse what path our program should follow according to several variables</p>
    <p>Basically, they work the same as in JavaScript</p>
    <p>For example, according to the variable <i>currentMonth</i>, there will be a message below</p>
    <?php 
        if($currentMonth == "January"){
            echo "<h2>It is the first month of the year</h2>";
        }else if($currentMonth == "February"){
            echo "<h2>It is the second month of the year</h2>";
        }else if($currentMonth == "March"){
            echo "<h2>It is the third month of the year</h2>";
        }else if($currentMonth == "April"){
            echo "<h2>It is the fourth month of the year</h2>";
        }else if($currentMonth == "May"){
            echo "<h2>It is the fifth month of the year</h2>";
        }else if($currentMonth == "June"){
            echo "<h2>It is the sixth month of the year</h2>";
        }else if($currentMonth == "July"){
            echo "<h2>It is the seventh month of the year</h2>";
        }else if($currentMonth == "August"){
            echo "<h2>It is the eight month of the year</h2>";
        }else if($currentMonth == "September"){
            echo "<h2>It is the ninth month of the year</h2>";
        }else if($currentMonth == "Octuber"){
            echo "<h2>It is the tenth month of the year</h2>";
        }else if($currentMonth == "November"){
            echo "<h2>It is the eleventh month of the year</h2>";
        }else if($currentMonth == "December"){
            echo "<h2>It is the twelveht month of the year</h2>";
        }
    ?>
</body>
</html>