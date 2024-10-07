<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome 1</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <div class="container">
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..") continue;
            if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } elseif (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            } else {
                continue;
            }

            echo "<div class='column'>";
            echo "<div class='image-box'>";
            echo "<img src='img/$img' width='130' alt='$name'>";
            echo "</div>";
            echo "<div class='text-box'>";
            echo "<a href='profile/$name.html' class='link'>$name</a>"; 
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
