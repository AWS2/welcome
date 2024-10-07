<!Doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de Imágenes</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1>Projecte Welcome 1</h1>

        <table>
            <?php
                $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
                foreach( $imgs as $img ) {
                    if( $img == "." || $img == ".." ) continue;

                    if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                        $name = substr($img, 0, -4);
                    } elseif (substr($img,-4)=="jpeg") {
                        $name = substr($img, 0, -5);
                    }

                    echo "<td>";
                    echo "<div>";
                    echo "<a href='profile/$name.html'>$name</a>";
                    echo "<a href='profile/$name.html'><img src='img/$img' class='float'></a>";
                    echo "</div>";
                    echo "</td>";
                }
            ?>
        </table>
    </body>
</html>