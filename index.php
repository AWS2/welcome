<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="STYLESHEET" type="text/css" href="flexbox.css"></link>
	<!--hola-->
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	


<h1>AWS2 Matrix World</h1>

<ul>

<?php
	echo "<div class='flex-container'>";
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" ) {
			$name = substr($img,0,-4);
			echo "<div class='flex-item'>";

				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img' width='130'><br/>\n";
				echo $name."</a>";


			echo "</div>";
			echo "<br/><br/>\n\n";
		}
	}
	echo "</div>";
	
?>

</ul>

</body>
</html>
