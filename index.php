
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles</title>
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	<ul>

	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        $i++;
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            
            if($i % 2 == 0){
                echo "<table cellspacing="10" cellpadding="10">";
                echo    "<tr>";
                echo        "<a href='profile/$name.html'>";
                echo            "<img src='img/$img' alt='Logo del perfil' width='130'>";
                echo        $name."</a>";
                echo    "</tr>";
                echo "</table>";
            }
        }
    ?>
</body>
</html>