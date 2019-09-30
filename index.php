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

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {

				echo "<div>";

				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo $name."</a>";
				

				echo "</div>";
				;
			}
		}

	?>

</body>
</html>
