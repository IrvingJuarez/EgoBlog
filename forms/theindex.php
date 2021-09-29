<!DOCTYPE html>
<html lang="en">
<?php

if($_POST){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    echo "Your name is ".$name.", you live in ".$country." and you are a ".$gender;
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" placeholder="Name" name="name">
        <br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <br>
        <input type="radio" name="gender" id="non-binary" value="non-binary">
        <label for="non-binary">Non-binary</label>
        <br>
        <select name="country" id="">
            <option value="mexico">México</option>
            <option value="colombia">Colombia</option>
            <option value="chile">Chile</option>
        </select>
        <br>
        <label for="conditions">Do you acceot terms and conditions?</label>
        <input type="checkbox" name="conditions" id="conditions" value="true">
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>