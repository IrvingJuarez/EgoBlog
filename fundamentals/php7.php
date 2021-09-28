<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New features in php 7</title>
</head>
<body>
    <h2>Scalar type declaration</h2>
    <p>Here we specify the type of variable to pass as parameter</p>
    <code>
        function givenName(int $var){
            return $var += 10;
        }

        givenName(3); // Good
        givenName('3'); //Good
        givenName('Three') //Error
    </code>
    <h2>Return type declaration</h2>
    <p>Let us specify the variable type for the variable to return</p>
    <code>
        function aName() : int{
            $result = 12;
            $result2 = '12';
            $anotherResult = 'twelve';

            return $result; //Good
            return $result2; //Good
            return $anotherResult; //Error
        }

        aName();
    </code>
    <h2>Spaceship operator</h2>
    <p>Used to compare numbers.</p>
    <code>
        echo 23 <=> 5;
    </code>
    <p>It returns 1 if the first number is greater than the second one.</p>
    <p>It returns 0 is both are equal</p>
    <p>It returns -1 if the first one is less than the second one</p>
</body>
</html>