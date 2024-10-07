<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - sergiofdce</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <h1>Welcome - sergiofdce</h1>

        <div id=TablaCSS>
        <ul>
            <?php
            $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);

            // Crear tabla
            echo "<table border='1'>";

            echo "<tr>";
            echo "<td> Imagen </td>";
            echo "<td> Enlace </td>";


            foreach ($imgs as $img) {
                if ($img == "." || $img == "..")
                    continue;
                if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
                    $name = substr($img, 0, -4);
                } else if (substr($img, -4) == "jpeg") {
                    $name = substr($img, 0, -5);
                }

                echo "<tr>";
                // Columna 1: Imagen
                echo "<td><img src='img/$img' width='130'></td>";
                // Columna 2: Enlace
                echo "<td><a href='profile/$name.html' alt='imagen'>$name</a></td>";
                
                echo "</tr>";
                // echo "<a href='profile/$name.html'>";
                // echo "<img src='img/$img' width='130'>";
                // echo $name . "</a>";
                // echo "<div></div>";
            }
            echo "</table>";
            ?>
            </il>

        </div>
    
</body>
</html>