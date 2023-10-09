<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Projects</title>
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	<ul>
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
            echo "<li><a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'> <br>";
            echo $name."</a>";
            echo "</li>";
            
        }
    ?>
    </ul>
</body>
</html>