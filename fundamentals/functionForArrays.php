<?php
    $friend = array(
        "name" => "Irving",
        "lastName" => "Juarez",
        "country" => "Mexico"
    );

    extract($friend);

    $weekDays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    function iterateArray($array){
        echo "<ul>";
            foreach($array as $item){
                echo "<li>".$item."</li>";
            }
        echo "</ul>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Useful functions to work with array in php</title>
</head>
<body>
    <h2>extract</h2>
    <p>
        We have an array like this: <pre><?php echo var_dump($friend); ?></pre>
    </p>
    <p>After to use extract, I can access to all the values in that array like we do with normal variables</p>
    <ul>
        <?php
            echo "<li>".$name."</li>";
            echo "<li>".$lastName."</li>";
            echo "<li>".$country."</li>";
        ?>
    </ul>

    <h2>Array pop</h2>
    <p>Remove the last element of an array</p>
    <h3>An array before the array_pop</h3>
    <?php iterateArray($weekDays); ?>
    <h3>An array after the array_pop</h3>
    <?php array_pop($weekDays); iterateArray($weekDays); ?>

    <h2>join</h2>
    <p>Displays all the items within our array being separated by a certain text between</p>
    <?php echo join(" - ", $weekDays); ?>

    <h2>Count</h2>
    <p>Let us know how many values are in an array</p>
    <p>The $weekDays array has <i><?php echo count($weekDays); ?></i> items</p>

    <h2>array_reverse</h2>
    <p>Rearreange our array in order to display it reversely</p>
    <?php
        iterateArray(array_reverse($weekDays));
    ?>
</body>
</html>
