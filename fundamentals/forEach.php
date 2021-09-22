<?php

$months = ["January", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December"]

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
    <h2>A forEach loop rendering all the months of the year</h2>
    <p><i>IMPORTANT</i>: this loop is recommended to use only in arrays</p>
    <ul>
        <?php

        foreach($months as $month){
            echo "<li>".$month."</li>";
        }

        ?>
    </ul>
</body>
</html>