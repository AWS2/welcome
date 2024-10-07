<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
    <h1>˚ʚ ❀ ɞ˚ Projecte Welcome 1 - Mar Mèlich ˚ʚ ❀ ɞ˚</h1>

    <table>
    <?php
    $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
    $contador = 0;
    echo "<tr>\n";
    foreach( $imgs as $img ) {
        if( $img=="." || $img==".." ){
            continue;
        }
        if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
            $name = substr($img,0,-4);
        }else if (substr($img,-4)=="jpeg") {
            $name = substr($img,0,-5);
        }
        echo "<td>\n";
        echo "<a href='profile/$name.html'>";
        echo "<img src='img/$img' width='130' alt='FotoPerfil'></a>\n<a>";
        echo "<a href='profile/$name.html'>";
        echo $name."</a>\n";
        echo "</td>\n\n";
        $contador +=1;
        if ( $contador ==3){
            echo "</tr>\n\n <tr>\n";
            $contador = 0;
        }

    }
    ?>
    </table>
    </div>
    
</body>
</html>
