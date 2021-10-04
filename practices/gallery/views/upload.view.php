<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <a href="index.php">Photo Gallery</a>
    </header>
    <main>
        <section class="upload-content">
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="POST" enctype="multipart/form-data">
                <label for="photo">Choose your photo</label>
                <input type="file" name="photo" id="photo">

                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Add a title" value="<?php echo $title ?? ""; ?>">

                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Add a description"><?php echo $text ?? ""; ?></textarea>

                <?php
                    if( isset($_POST["upload"]) ){
                        emptiness($title, "Title");
                        emptiness($text, "Description");

                        if($errors){
                            echo $errors;
                        }else{
                            photoComprobation();
                        }
                    }
                ?>

                <input type="submit" name="upload" value="Upload photo">
            </form>
        </section>
    </main>
    <footer>
        A digital product made by: Irving Juárez
    </footer>
</body>
</html>