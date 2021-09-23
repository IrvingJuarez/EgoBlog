<?php
    $chars = "<span>What's up bro?</span>";
    $text = ' Hello Alberto ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in useful function to work with strings in php</title>
</head>
<body>
    <h2>htmlspecialchars</h2>
    <p>This let us save our code avoiding the inyection of code</p>
    <?php
        echo htmlspecialchars($chars);
    ?>
    <h2>trim</h2>
    <p>Delete all the initial and final blank spaces in a given string</p>
    <?php
        echo $text;
        echo trim($text);
    ?>
    <h2>strlen</h2>
    <p>Straight forward, let us know the lenght of a given string</p>
    <?php
        echo 'The lenght of $text is: '.strlen($text);
    ?>
    <h2>substr</h2>
    <p>Let us take a substring of a given string</p>
    <?php
        echo 'A sub-string from $text: '.substr($text, 7, 7);
    ?>
    <h2>strtoupper</h2>
    <p>Taking the string to upper case</p>
    <?php
        echo strtoupper($text);
    ?>
    <h2>strtolower</h2>
    <p>Taking the string to lower case</p>
    <?php
        echo strtolower($text);
    ?>
    <hr>
    <p>There is more stuff to get done, there are around 1000 function built-in php</p>
</body>
</html>