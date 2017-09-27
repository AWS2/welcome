<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilos.css"/>

	</head>
    <body>
        <h1>El fabuloso mundo de AWS2</h1>

        <div id="contenedorPrincipal">
			<?php
				$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
				foreach( $imgs as $img ) {
					
					if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
						
						$name = substr($img,0,-4);
						echo "<a href='profile/$name.html'>";
						echo "<div class='contenido'>";
						echo "<p class='descripcion'>".$name."</p>";
						echo "<img src='img/$img' width='130'><br/>";
						echo "</div></a>";
					}


				}

			?>
		</div>
    </body>
</html>
