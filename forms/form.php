<?php

$error = "";

function getVarReady($var){
    $var = filter_var($var, FILTER_SANITIZE_STRING);
    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);
    return $var;
}

if(isset($_POST['basic-info'])){
    $name = $_POST['name'];

    if(!empty($name)){
        $name = getVarReady($name);
        echo "Your name is ".$name."<br>";
    }else{
        $error .= "Warning: Please add a name <br>";
    }

    $email = $_POST['email'];

    if(!empty($email)){
        $email = getVarReady($email);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Your email is: ".$email."<br>";
        }else{
            $error .= "Warning: Your email address is not valid <br>";
        }
    }else{
        $error .= "Warning: Please add an email address <br>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="name" id="name" placeholder="Name">
        <br>
        <input type="email" name="email" id="email" placeholder="Email">
        <br>
        <input type="submit" value="Send" name="basic-info">
    </form>

    <?php if(!empty($error)): ?>
        <h3><?php echo $error; ?></h3>
    <?php endif; ?>

</body>
</html>