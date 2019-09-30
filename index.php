<head>
	<link rel="stylesheet" href="styles.css">
</head>
<body>	
	<div id="container"></div>
	<h1>Projecte Welcome 1</h1>

		<ul>
		<div class="inner">
		<?php

			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					$name = substr($img,0,-4);
					echo "<div class='inner'>";
					echo "<a class='imagenes' href='profile/$name.html'>";
					echo "<img src='img/$img' width='130'>";
					echo "<p>".$name."</p></a></div>";
				}
			}

		?>
	</div>

</body>
