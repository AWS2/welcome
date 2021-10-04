<head>
	<link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>
<body>
	<h1>Projecte Bananas 1</h1>
	
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div>";
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo "<br/>";
				echo $name."</a>";
				

				echo "</div>";
				;
			}
		}

	?>
	
</body>
