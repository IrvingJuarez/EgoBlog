<?php

$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterating Array in php</title>
</head>
<body>
    <h2>All the months of the year being iterated by 'for' and 'while' loops</h2>
    <ul>
        <?php
            for($i = 0; $i < count($months); $i++){
                echo "<li>".$months[$i]."</li>";
            }
        ?>
    </ul>

    <ul>
        <?php
            $counter = 0;

            while($counter < count($months)){
                echo "<li>".$months[$counter]."</li>";

                $counter++;
            }
        ?>
    </ul>
</body>
</html>