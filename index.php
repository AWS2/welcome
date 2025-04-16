<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta author="Gracia Clemente, AWS2">
        <title>Projecte Welcome 1</title>
        <link rel="stylesheet" href="index.css">
    </head>


    <div>
        <h1>Projecte Welcome 1</h1>
        <div class="container">
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
                echo "<div class='profile'>";
                echo "<a href='profile/$name.html' id='$name'>";
                echo "<img src='img/$img' alt='$name' class='profile-img'>";
                echo "<p class='profile-name'>$name</p>";
                echo "</a>";
                echo "</div>";

            }
            ?>
        </div>
    </body>
</html>