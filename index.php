<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <?php
        echo "<table>";
            echo "<tr>";
                $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
                foreach( $imgs as $img ) {
                    if( $img=="." || $img==".." )
                        continue;
                    if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                        $name = substr($img,0,-4);
                    }else if (substr($img,-4)=="jpeg") {
                        $name = substr($img,0,-5);
                    }
                    echo "<td>";
                    echo "<a href='profile/$name.html'>";
                    echo "<img src='img/$img' width='130' alt='$name'>";
                    echo $name."</a>";
                    echo "</td>";
                }
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>