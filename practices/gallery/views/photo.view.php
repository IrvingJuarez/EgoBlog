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

    <a href="upload.php">Upload photo</a>
    </header>
    <main>
        <section class="photo-content">
            <?php
                if( $errors ){
                    echo $errors;
                }else{
                    echo "<article class='photo-content_img'>";
                        echo "<img src='".$url."' title='".$title."'/>";
                    echo "</article>";

                    echo "<article class='photo-content_description'>";
                        echo "<h2>".$title."</h2>";
                        echo "<p>";
                            echo $description;
                        echo "</p>";
                    echo "</article>";
                }
            ?>
        </section>
    </main>
    <footer>
        A digital product made by: Irving Juárez
    </footer>
</body>
</html>