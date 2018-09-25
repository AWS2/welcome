<link rel="stylesheet" href="style.css" type="text/css">
<body>
	<h1>Projecte Welcome 1</h1>
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
<<<<<<< HEAD
				echo "<div class="img_texto">\n";
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img'>\n";
				echo $name. "</a>\n";
=======
				echo "<div>\n";
			//	echo "	<a href='profile/$name.html'>\n";
				echo "	<img src='img/$img' href='profile/$name.html'>";
			//	echo $name."</a>\n";
>>>>>>> 4eb8155e445a009cfc4c0da780b1540af27fa6df
				echo "</div>\n";
				;
			}
		}

	?>
		
</body>
