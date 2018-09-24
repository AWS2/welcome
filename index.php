<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Projecte Welcome 1</title>
</head>

<body>
	<h1>Projecte Welcome 1</h1>
	<link rel="stylesheet" type="text/css" href="welcome.css" />

	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>\n<br>";
				echo $name."</a>\n<br>";
				

				echo "<div></div>";
				;
			}
		}

	?>

</body>
