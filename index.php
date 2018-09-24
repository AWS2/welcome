<head>
	<title>Galeria AWS2</title>
</head>
<body>
	<div>
	<h1>Galeria de la Classe AWS2 Curso 2018-2019</h1>
</div>
	<ul>

	<?php
 	$i =0;
		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div>";
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo $name."</a>";
				echo "</div>";
			}
		}

	?>
<footer>
	<p> Editado por Cristian y Nil </p>
</footer>
</body>
