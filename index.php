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
<table>
<?php
    $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
    $imgFormats = [".jpg", ".jpeg", ".png"];
    $profiles = scandir("./profile", SCANDIR_SORT_ASCENDING);
    $columns = 8;
    $column = 0;
    foreach( $profiles as $profile ) {
        if ($profile == "." || $profile == "..") {
            continue;
        } else if (substr($profile,-4) == "html") {
            $name = substr($profile,0,-5);
        }

        if ($column % $columns == 0)
            echo "<tr>";
        echo "<td>\n";
        echo "<div class='profile'>\n";
        
        $imgTrobada = false;
        foreach ($imgFormats as $format) {
            if (in_array($name.$format, $imgs)) {
                echo "  <img src='img/$name$format' alt='Imatge de $name'>\n";
                $imgTrobada = true;
            }
        }
        if (!$imgTrobada) {
            echo "  <img src='img/$name.jpg' alt='Imatge de $name no trobada'>\n";
        }

        echo "  <a href='profile/$profile'>\n";
        echo "    ".$name."\n";
        echo "  </a>\n";
        echo "</div>\n";
        echo "</td>\n";
        if ($column % $columns == $columns - 1) {
            echo "</tr>";
        }
        $column++;
    }
?>
</table>

</body>
</html>