<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while loop in php</title>
</head>
<body>
    <h2>Showing number from 1 to 10 using do while loop</h2>
    <ul>
        <?php
            $i = 1;

            do{
                echo "<li>".$i."</li>";

                $i++;
            } while($i <= 10);
        ?>
    </ul>
</body>
</html>