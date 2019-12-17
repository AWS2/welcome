<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="ex1.css"/>

	</head>
    <body>
        <h1 class="titulo">AWS-Oscar</h1>

        <div id="contenedorPrincipal">
			<?php
				$extencionesPermitidas = array("jpg", "png", "pjeg", "gif");

				$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
				foreach( $imgs as $img ) {
					$extencion = substr($img, strrpos($img, ".")+1);
					if( in_array(strtolower($extencion), $extencionesPermitidas)) {
						$name = substr($img,0,strrpos($img, "."));
						echo "<a href='profile/$name.html'>";
						echo "<div class='contenido'>";
                        echo "<img src='img/$img' width='130'><br/>";
                        echo "<span class='descripcion'><span>".$name."</span></span>";
						echo "</div></a>";
					}
				}
			?>
		</div>
    </body>
</html>
