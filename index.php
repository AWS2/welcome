<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./stylesheets.css">

    <title>Projecte Welcome 1</title>
</head>
<body>
	<h1 id="">Projecte Welcome 1</h1>
	<ul>

	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        echo "<div id='container'>";
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<a class='nameTxTView' href='profile/$name.html'>";
            echo "<img class='imgView' src='img/$img' width='130'>";
            echo $name."</a>";
            echo "<div></div>";
        }
        echo "</div>";
    ?>

</body>
