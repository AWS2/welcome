<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes alumnos - David Perera Gonzalez</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
        <h1>Projecte Welcome 1 - David Perera Gonzalez</h1>
        <ul>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..") continue;

            $ext = pathinfo($img, PATHINFO_EXTENSION);
            $name = pathinfo($img, PATHINFO_FILENAME);

            if (in_array(strtolower($ext), ['jpg', 'png', 'jpeg'])) {
                echo "<div class='card'>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' alt='$name'>";
                echo "<p>$name</p>";
                echo "</a>";
                echo "</div>";
            }
        }
        ?></ul>
</body>
</html>