<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UF8 Rama git William Molina</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <table>
        <tr>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        $count = 0;

        
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
                
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }else {
                continue; //evita errores de formatos no validos
            }

            echo "<td>";
            echo "<div>";
            echo "<img src='img/$img' alt='$name'>";
            echo "<a href='profile/$name.html'>$name</a>";
            echo "</div>";
            echo "</td>";

            // Crear una nueva fila después de cada 4 imágenes
            $count++;
            if ($count % 4 == 0) {
                echo "</tr><tr>";
             }
        }
        
        ?>
        </tr>
    </table>
</body>
</html>
