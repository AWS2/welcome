<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	
	<div class="flex-container">
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {
				
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				echo "<div class='imagen'>";
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo "<p>".$name."</p></a>";
				echo "</div>";
				
			}
			
		}

	?>
	</div>
</body>
