<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <h2>Registrate</h2>
        <section class="main_form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <label for="name">User name</label>
                <input type="text" name="name" id="name" value="<?php echo ( isset($username) & !empty($errors) ) ? $username : ""; ?>">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo ( isset($password) & !empty($errors) ) ? $password : ""; ?>">

                <label for="password2">Repeat the password</label>
                <input type="password" name="password2" id="password2" value="<?php echo ( isset($password2) & !empty($errors) ) ? $password2 : ""; ?>">

                <?php
                    if(isset($_POST['submit'])){
                        emptiness($username, "Username");
                        emptiness($password, "Password");
                        emptiness($password2, "Password comprobation");

                        if($errors){
                            echo $errors;
                        }else{
                            echo "<span class='success'>The data was sent sucessfully</span>";
                        }
                    }
                ?>

                <input type="submit" name="submit" value="Sign in">
            </form>

            <article>
                <h3>Already registered?</h3>
                <a href="login.php">Log in</a>
            </article>
        </section>
    </main>
</body>
</html>