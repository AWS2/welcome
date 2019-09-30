<<<<<<< HEAD
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

 <div class="header">
  <h1>Projecte Welcome 1</h1>
</div> 

<body>
	
	<ul>
=======
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>

<body>
	<h1>Projecte Welcome 1</h1>
	
>>>>>>> c9310901fc25afcf9b3b614f5bb76a3759574c83

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {

				echo "<div>";

				$name = substr($img,0,-4);
				echo "<div class='polaroid'>";
				echo "<a href='profile/$name.html'>";
				echo "<div class='container'>";
				echo "<img src='img/$img'>";
				echo "<p>$name</p></div></a></div>";
				

<<<<<<< HEAD
				echo "</div>";
=======
				echo "\n";
>>>>>>> c9310901fc25afcf9b3b614f5bb76a3759574c83
				;
			}
		}

	?>

</body>
<<<<<<< HEAD
</html>
=======

</html>
>>>>>>> c9310901fc25afcf9b3b614f5bb76a3759574c83
