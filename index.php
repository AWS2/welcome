<!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel=stylesheet href="/jail.css"/>
<body>
	<div align = 'center'><h1>Projecte Welcome 1</h1></div>
	<ul>

	<?php 


		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div align = 'center'><a href='profile/$name.html'><br>";
				echo "<img src='img/$img' width='150' height='150'><br>";
				echo $name."</a><br></div";
				echo "<div></div>";
				;
			}
		}

	?>

</body>
</html>
