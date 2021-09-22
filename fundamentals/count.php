<?php

$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November"];
$quantity = count($months);
$lastMonth = $months[$quantity - 1]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count function in php</title>
</head>
<body>
    <h2>What the function count() does?</h2>
    <p>This function is similar to length used in JavaScript. It returns the number of values inside an array</p>
    <p>The array $months has <?php echo $quantity; ?> values</p>
    <p>And the final value is <?php echo $lastMonth; ?></p>
</body>
</html>