<?php

$size = $_COOKIE["font-size"] ?? "15px";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
    <style>
        p{
            font-size: <?php echo $size; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, nostrum eaque, quae ad odio ut est eum nemo fugit exercitationem maxime temporibus. Illo placeat non esse delectus autem nam optio?</p>
</body>
</html>