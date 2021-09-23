<?php
    $num = 3.141592;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematicals function</title>
</head>
<body>
    <h2>round()</h2>
    <p>Used to round a number, for example, the number to be rounded will be <?php echo $num; ?></p>
    <p>Now, the number already rounded would be <?php echo round($num); ?></p>

    <h2>rand()</h2>
    <p>Allow us to obtain a random number. We declare the range</p>
    <p>For instance, a random number: <i><?php echo rand(1, 100); ?></i></p>

    <h2>ceil()</h2>
    <p>Useful to round a number, but only upwards. I am going to round the $num, which is <?php echo $num; ?></p>
    <p><i><?php echo ceil($num); ?></i></p>

    <h2>M_PI</h2>
    <p>Finally, we have a function that let us obtain the constant PI</p>
    <p>The number returned by M_PI is: <i><?php echo M_PI; ?></i></p>
</body>
</html>