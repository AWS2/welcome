<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Projecte Welcome 1</h1>

	<div class="container">
		<?php 
			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {	
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
					$name = substr($img,0,-4);
				}else if (substr($img,-4)=="jpeg") {
					$name = substr($img,0,-5);
				}
				?>

				<div class="marco">
					<div class="flex">
						<?php
							echo "<a href='profile/$name.html'><img src='img/$img' href='profile/$name.html' width='130'> </a>";
							echo "<a class='name' href='profile/$name.html'>$name</a>";
							echo "<div></div>";
						?>
					</div>
				</div>
				<?php
			}
		?>

	</div>

</body>
