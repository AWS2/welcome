<!DOCTYPE html>
<html>
<head>
	<title>CarlosRohan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<div id="titulo">
			<h1>Projecte Welcome 1</h1>
		</div>
		<div id="body">
			<div id="cuerpo">
				<?php 
					$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
					foreach( $imgs as $img ) {	
						if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
							$name = substr($img,0,-4);
							echo "<div class='cuerpo2'>";
							echo "<a href='profile/$name.html'>";
							echo "<img src='img/$img' width='130'>";
							echo "<p>$name.</p></a>";
							echo "<div></div>";
							echo "</div>";
							;
						}
					}
				?>
			</div>
		</div>
	</body>
</html>
