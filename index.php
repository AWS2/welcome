<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
        <section>
            <div class="animation1"><h1 style="text-align: center">Gente de AWS2</h1></div>
        </section>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				echo "<div id='contenedor'>";
					echo "<div id='contenedor-imagen'>";
							echo "<a href='profile/$name.html'>";
							echo "<img style='float:left' src='img/$img' width='130'>";
					echo "</div>";
				echo "</div>";
				echo "</div>";
				;
			}
		}

	?>
</body>

</html>
