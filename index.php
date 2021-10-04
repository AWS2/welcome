<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projecte Welcome 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	<div class="contenedor">

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				echo "<div class=subcontenedor>";
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'><br>";
				echo $name."</a>";
				echo "</div>";
			}
		}

	?>
	</div>
</body>
