<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="cabeza">
		<img src="./ETINDER.png" alt="">
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

			?>
		</div>

</body>

</html>
