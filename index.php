<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <div class="card-container">
    <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..") {
                continue;
            }
            if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<a href='profile/$name.html'>";
            echo "<div class='card'>";
            echo "<img src='img/$img' alt='$name' class='card-image'>";
            echo "<div class='card-name'>$name</div>";
            echo "</div>";
            echo "</a>";
        }
    ?>
    </div>
</body>
</html>
