<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Projecte Welcome 1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body style="height: 100%; margin:5 5 5 5; background-color: #E9E3E8">
	<div class="title" style="text-align:center; margin-bottom: 5%;">
		<h1 style="font-family: oswald; text-shadow: 2px 2px 6px #DF01A5, 2px 2px 5px #f00;">PROJECTE WELCOME 1</h1>
	</div>	
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "
					<div class='card' style='width: 18rem; display: grid; float: left; padding: 10px;'>
						<img class='card-img-top' src='img/$img' alt='Card image cap' style='height: 270px;'>
						<div class='card-body' style='text-align: center;'>
							<a href='profile/$name.html' class='btn btn-primary'>$name</a>
						</div>
					</div>
				"
				;
			}
		}
	?>
</body>
<footer>
	<p style="clear: both; padding-top: 20px; text-align: right">Style created by: Iker Cayero and Silvia De La Cruz</p>
</footer>
</html>