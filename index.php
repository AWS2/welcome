<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnes AWS2</title>
    <link rel="stylesheet" href="index.css">
</head>
    

<div>
        <h1>Projecte Welcome 1 - Erik Pinto</h1>
        <div class="main-container">
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..")
                continue;
            if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            
            echo "<div class='item-container'>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' alt='$name'>";
            echo "<h3 class='break'>$name</h3>";
            echo "</a>";
            echo "</div>";
        }
        ?>
        </div>
</body>

</html>