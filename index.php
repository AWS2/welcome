<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>

    <title>Index - Marta Arevalo</title>
</head>
<body>

    <h1>  ʚ ✩ ɞ Projecte Welcome 1 ʚ ✩ ɞ</h1>
    
    

    <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        
        foreach( $imgs as $img ) {

            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            
            echo "<div class='contenedorIndex'>";

                echo "<div class='perfilIndex'>";

                    echo "<div class='fotoIndex'>";

                        echo "<a class='vinculoPerfil' href='profile/$name.html' target='_self'>";
                        
                            echo "<img class='imgIndex' src='img/$img' width='130' alt='fotoPerfil'/>";
                        
                        echo "</a>";

                    echo "</div>";
                    
                    echo "<p>𝜗𐑞 $name 𝜗𐑞</p>";

                echo "</div>";
            
            echo "</div>";

        }
    ?>
    
</body>
</html>