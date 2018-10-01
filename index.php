<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "theme.css">
</head>
<body>
	<div class = "header">
	<h1>Projecte Welcome 1</h1>
	<img src="marx_engels_lenin.png">
	</div>
	<br>
	<br>
	<p>Selecciona un usuari per visualitzar el seu perfil, sabem que com que no tens vida, no tens res millor a fer:
	<br><br><br>
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		echo "<div class = 'container'>\n";
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div class = 'item'>\n";
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img' width='130' height='130'>\n";
				echo "<br>";
				echo $name."</a>\n";
				

				echo "</div>\n\n";

				;
			}
		}
						echo "</div>\n\n";
	?>
</body>
</html>