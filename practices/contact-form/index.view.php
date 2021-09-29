<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <!-- <div class="alert error">
            Error
        </div>

        <div class="alert success">
            Success
        </div> -->

        <input type="submit" value="Send message" name="submit" class="btn-submit">
    </form>
</body>
</html>