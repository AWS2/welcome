<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AWS2</title>
    <link href="sobrasada.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Welcome AWS2</h1>
    <div id="container">
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
                $name = substr($img,0,-4);
                echo "<a href='profile/$name.html'>";
                echo "<div class='content'>";
                echo "<img src='img/$img' width='130'>";
                echo "<span class='author'>".$name."</span>";
                echo "</div></a>";
            }
        }
        ?>
    </div>
</body>
</html>

