<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination practice</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <h2>Articles</h2>
        <section class="articles">
            <ul>
                <?php
                    while($row = $result->fetch_assoc()){
                        echo "<li>".$row['id'].".- ".$row['title'].".</li>";
                    }
                ?>
            </ul>
        </section>

        <section class="pagination">
            <ul>
                <?php
                    $a = $_GET['page'] ?? 1;
                    for($i = 1; $i <= ceil($rowNum / $limit); $i++){
                        if($i == $a){
                            echo renderLi($i, true);
                        }else{
                            echo renderLi($i, false);
                        }
                    }
                ?>
            </ul>
        </section>
    </main>
</body>
</html>