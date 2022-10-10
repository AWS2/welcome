<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tablas.css" rel="stylesheet" type="text/css">
    <title>Perfiles</title>
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        $i++;
        echo "<table >";
        foreach( $imgs as $img ) {
            if($i % 3 == 0){
                echo "<tr class='celdas'></tr>";   
            }
            $i++;
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if(substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<td class='celdas'>";
            echo "<a href='profile/$name.html'><br>";
            echo "<img src='img/$img' width='130'></a><br>";
            echo "<a href='profile/$name.html'>".$name."</a>";
            echo "</td>";
        }
        echo "</table>";
    ?>
</body>
</html>