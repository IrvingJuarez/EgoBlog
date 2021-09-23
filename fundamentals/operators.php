<?php

$number = 10;
$str = "This is the original string.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in php</title>
</head>
<body>
    <p>Operator in php are almost the same as the ones in JavaScript. But there are some thing I didn't know that maybe can be useful</p>
    <p>Some of those things is that in the increment and decrement, the position where '++' or '--' are placed play an important role</p>
    <p>Our original values is <?php echo $number; ?></p>
    <p>Using it after: <?php $numberAfter = $number; echo $numberAfter++ ?></p>
    <p>Using '++' before: <?php $numberBefore = $number; echo ++$numberBefore ?></p>
    <p>It works the same way with '--'</p>
    <hr>
    <h2>Concatenation of strings</h2>
    <p>As I already know, the concatenation in php works through the dot. However, I can use <i>.=</i> if I want to take the given string and concatenate it another one</p>
    <p>The original string: <?php echo $str; ?></p>
    <p>The string with an extension: <?php echo $str .= " Well, this is the actual extension, it is not to much, but it is good enough"; ?></p>
</body>
</html>