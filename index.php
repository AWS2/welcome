
<head>
	<link href="CSSGit.css" rel="stylesheet" type="text/css">
</head>
<body >
	<h1 style='text-align: center'>El fabuloso mundo de AWS2</h1>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div style='text-align: center'>";
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo "<br>";
				echo $name."</a>";
				echo "<div></div>";
				echo "</div>";
				echo "<br>";
				echo "<br>";

				;
			}
		}
	?>

</body>