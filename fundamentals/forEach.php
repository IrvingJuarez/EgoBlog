<?php

$months = ["January", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December"];
$friend = array(
    "Name" => "Irving",
    "Last Name" => "Juárez",
    "Country" => "México"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>
</head>
<body>
    <h2>Months of the year</h2>
    <ul>
        <?php

        foreach($months as $month){
            echo "<li>".$month."</li>";
        }

        ?>
    </ul>

    <h2>Values of an item</h2>
    <ul>
        <?php
            foreach($friend as $item => $value){
                echo "<li>".$item.": ".$value."</li>";
            }
        ?>
    </ul>
</body>
</html>