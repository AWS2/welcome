
<head>
	<link rel="stylesheet" type="text/css" href="ferryrafa.css"/>
</head>
<body>
	<link rel="stylesheet" href="ferryrafa.css">
	<h1>Projecte Welcome 1</h1>
<<<<<<< HEAD
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'></a>";
				echo "<p>".$name."</a>";
				

				echo "<div></div>";
				;
=======
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
>>>>>>> e37a5f25cb6cb66e879a5c73710778e0ca046137
			}



			?>
</body>
