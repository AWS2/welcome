<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Welcome</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1>Welcome</h1>
    </header>

    <div class="container">
        <ul class="image-list">
            <?php
            $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
            foreach($imgs as $img) {
                if($img == "." || $img == "..")
                    continue;
                if(substr($img, -3) == "jpg" || substr($img, -3) == "png"){
                    $name = substr($img, 0, -4);
                } else if (substr($img, -4) == "jpeg") {
                    $name = substr($img, 0, -5);
                }

                echo "<li class='image-item'>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' alt='$name' class='image'>";
                echo "<span class='image-name'>$name</span>";
                echo "</a>";
                echo "</li>";
            }
            ?>
        </ul>
        </div>
</body>
</html>
