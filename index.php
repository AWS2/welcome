<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	<title></title>
</head>
<body>
	<!--<h1 align="center">Projecte Welcome 1</h1>-->
	<p><a id="titulo">Projecte Welcome 1</a><p>
	<br><br><br><br><br><br><br><br><br>
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div id='ex4'>";
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img' width='300' height='300'>";
				echo "<p>";
				echo $name."</a>\n";
				echo "</p>";
				echo "</div>";
			}
		}
	?>
</body>
</html>