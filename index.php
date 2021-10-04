<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<div style="width:100%;display:flex;justify-content:center;margin-bottom:30px">
	<h1>Projecte Welcome 1</h1>
</div>
	<ul>
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		echo "<div style='display:flex;width:100%;flex-wrap:wrap'>";
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);

				echo "<div>";
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo $name."</a>";
				echo "</div>";
				echo "<div></div>";
				;
			}
		}
		echo "</div>";
	?>

</body>
