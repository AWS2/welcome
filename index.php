<head>
	<title>Galeria AWS2</title>
	<link rel="stylesheet" href="css/Css.css">
</head>
<body>
	<div class="titulo">
	<h1>Galeria de la Classe AWS2 Curso 2018-2019</h1>
</div>
	<div class="imagenes">
	<?php
 	$i =0;
		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div class='Img'>\n";
				echo "<a href='profile/$name.html' target='_blank'>\n";
				echo "<img src='img/$img' width='130'>\n";
				echo "<br>".$name."</a>\n";
				echo "</div>\n";
			}
		}

	?>
</div>
<footer>
	<p> Editado por Cristian y Nil </p>
</footer>
</body>
