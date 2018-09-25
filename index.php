<link rel="stylesheet" href="style.css" type="text/css">
<body>
	<h1>Projecte Welcome 1</h1>
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);

				echo "<div class="img_texto">\n";
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img'>\n";
				echo $name. "</a>\n";
				echo "</div>\n";
				;
			}
		}

	?>
		
</body>
