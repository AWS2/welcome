<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS FlexBox Style</title>
	<link rel="stylesheet" type="text/css" href="flexbox.css">
</head>
<body>
	

<h1>AWS2 Matrix World</h1>

<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	echo '<div class="container">';
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" ) {
			$name = substr($img,0,-4);
			echo "\n";
			echo '<div class="item">';
			echo "<a href='profile/$name.html'>";
			echo "\n";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br /> \n";
			echo '</div>';
			echo "\n";
			echo "\n";
		}
	}
	echo "</div>";
?>

</ul>
</body>
</html>