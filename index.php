<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	 <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="cabeza">
		<h3>Alumnos AWS!!!</h3><hr>
	</div>


	<ul>
		<div class="todas">
			<?php
				$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
				foreach( $imgs as $img ) {
					if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
						$name = substr($img,0,-4);
						echo "<div class=caja>"."<a href='profile/$name.html'>";
						echo "<img src='img/$img' width='100%' height='100%'>";
						echo "<p>".$name."</p>"."</a>"."</div>";

						echo "<div></div>";
						;
					}
				}
=======
	 <link rel="stylesheet" href="css.css">
</head>
<body>
	<div class="cabeza">
		<p>Alumnos Aws</p>
		<hr>
	</div>
	
	<h1>Projecte Welcome 1</h1>
	<ul>

		<div>
			<?php 

				$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
				foreach( $imgs as $img ) {	
					if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
						$name = substr($img,0,-4);
						echo "<div class=caja>"."<a href='profile/$name.html'>";
						echo "<img src='img/$img' width='100%' height='100%'>";
						echo "<p>".$name."</p>"."</a>"."</div>";
						

						echo "<div></div>";
						;
					}
				}

>>>>>>> bff88489b7485b49a821a79fc68628a047833b48
			?>
		</div>

</body>

</html>
