
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Document</title>
</head>



<body>
<h1>Projecte Welcome 1</h1>
    <ul>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..")
                continue;
            if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } elseif (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<li>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' class='image'>";
            echo $name . "</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>