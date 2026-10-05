<!DOCTYPE html>
<html lang="en">
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
    $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
    $columns = 8;
    $column = 0;
    foreach( $imgs as $img ) {
        if ($img == "." || $img == "..")
            continue;
        if (substr($img,-3) == "jpg" or substr($img,-3) == "png") {
            $name = substr($img,0,-4);
        } else if (substr($img,-4) == "jpeg") {
            $name = substr($img,0,-5);
        }

        
        if ($column % $columns == 0)
            echo "<tr>";
        echo "<td>\n";
        echo "<div class='profile'>\n";
        echo "  <img src='img/$img'>\n";
        echo "  <a href='profile/$name.html'>\n";
        echo "    ".$name."\n";
        echo "  </a>\n";
        echo "</div>\n";
        echo "</td>\n";
        if ($column % $columns == 7) {
            echo "</tr>";
        }
        $column++;
    }
?>
</table>

</body>
</html>