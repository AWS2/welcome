<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
</body>
</html>
<body>
        <h1>Projecte Welcome 1</h1>
        <ul>
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        echo '<table>';
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "
                <tr>
                    <td><a href='profile/$name.html'><img src='img/$img' alt='foto de perfil' width='130'></a></td>"
                    ;
            echo "
                    <td><a href='profile/$name.html'>".$name."</a></td>
                </tr>";
        }
        echo '</table>';
    ?>
    </ul>
</body>