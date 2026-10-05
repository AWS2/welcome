<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome - Ibtissam Ouald ali</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <h1>Projecte Welcome 2026 : Ibtissam Ouald ali</h1>
    <ul>
        <?php
            $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
            $profiles = scandir("./profile",SCANDIR_SORT_ASCENDING);
            foreach( $imgs as $img ) {
                if( $img=="." || $img==".." )
                    continue;
                if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                    $name = substr($img,0,-4);
                }else if (substr($img,-4)=="jpeg") {
                    $name = substr($img,0,-5);
                }
                if( in_array($name.".html", $profiles) ) {
                    echo "<div class='tarjeta'>";
                    echo "<a href='profile/$name.html'>";
                    echo "<img src='img/$img' width='130' alt='$name'>";
                    echo $name; 
                    echo "</a>";
                    echo "</div>";
                }
            }
        ?>
    </ul>
</body>
</html>