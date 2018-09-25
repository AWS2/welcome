<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.php" />
	<title></title>
</head>
<body>
	<h1 align="center">Projecte Welcome 1</h1>
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img' width='350' height='300'>";
				"</a>\n";
			}
		}
	?>
</body>
</html>