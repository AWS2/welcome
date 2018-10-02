<title>Casa Tarradellas</title>
<link rel="shortcut icon" href="chorizo.jpg" />
<body>
	<link rel="stylesheet" type="text/css" href="index.css">
	<img src="Title.gif" class='Titulo'>
	<ul>
	<div class="container">
	<?php 
		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div>";
				echo "<a href='profile/$name.html'>\n";
				echo "<br>";
				echo "<img src='img/$img' alt='Avatar' class='Images' title='$name'>\n";
				echo "<h6>".$name."</h6>";
				echo "</div>";

			}
		}

	?>
</div>
</body>