<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<h1 class='col-sm-12 text-center w-100 p-3'>Projecte Welcome 1</h1>
	</div>
	<div class="row">
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div class='col-lg-3 row'>";
				echo "<div class='col-lg-8 m-auto'>";
				echo "<a class='' href='profile/$name.html'><img src='img/$img' width='130'>$name.</a>";
				echo "</div>";
				echo "</div>";
			}
		}

	?>
	</div>
</body>
</html>