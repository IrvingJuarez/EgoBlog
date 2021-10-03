<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <h2>Registrate</h2>
        <section class="main_form">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="name">User name</label>
                <input type="text" name="name" id="name">

                <label for="password">Password</label>
                <input type="password" name="password" id="password">

                <label for="password2">Repeat the password</label>
                <input type="password" name="password2" id="password2">

                <?php
                    if(isset($_POST['submit'])){
                        // $name = $_POST['name'];
                        // $password = $_POST['password'];

                        // echo emptiness($name, "User name");
                        // echo emptiness($password, "Password");
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