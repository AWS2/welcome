<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Students</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
            <h1>PROJECTE WELCOME 1</h1>
            
            <table>
                
            <?php

                $contador = 0;

                $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
                foreach( $imgs as $img ) {

                    if ($contador == 0){
                        echo "<tr>";
                    }

                    if( $img=="." || $img==".." )
                        continue;
                    if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                        $name = substr($img,0,-4);
                    }else if (substr($img,-4)=="jpeg") {
                        $name = substr($img,0,-5);
                    }

                    echo "<td>";
                    echo "<a href='profile/$name.html'><img src='img/$img' width='130'><br>$name</a>";
                    echo "</td>";

                    $contador += 1;

                    if ($contador == 5){
                        echo "</tr>";
                        $contador = 0;
                    }
                }

                if ($contador != 5 && $contador != 0) {
                    echo "</tr>";
                }
            
            ?>

            </table>
            
        
    </body>
</html>

