
<head>
	<link rel="stylesheet" type="text/css" href="ferryrafa.css"/>
</head>
<body>
	<link rel="stylesheet" href="ferryrafa.css">
	<h1>Projecte Welcome 1</h1>
		<?php
			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					$name = substr($img,0,-4);
					echo '<div class="polaroid">';
						echo "<img src='img/$img' width=100%;>";
						echo "<div class='container'>";
							echo "<a href='profile/$name.html' target='_blank'>" . $name . "</a>";
						echo "</div>";
					echo "</div>";
				}
			}



			?>
</body>
