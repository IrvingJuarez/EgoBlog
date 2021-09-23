<?php
    $countries = array("Mexico", "Brazil", "Ecuator", "Peru", "Turkey", "Bolivia", "Argentina");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break & continue in php</title>
</head>
<body>
    <h2>Here I am showing all the countries</h2>
    <ul>
        <?php
            foreach($countries as $country){
                echo "<li>".$country."</li>";
            }
        ?>
    </ul>
    <h2>Several countries being broken by a certain condition</h2>
    <ul>
        <?php
            foreach($countries as $country){
                echo "<li>".$country."</li>";

                if($country == "Peru"){
                    break;
                }
            }
        ?>
    </ul>
    <h2>We are going to skip a certain value if a condition is matched</h2>
    <ul>
        <?php
            foreach($countries as $country){
                if($country == "Turkey"){
                    continue;
                }

                echo "<li>".$country."</li>";
            }
        ?>
    </ul>
</body>
</html>