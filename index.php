<html>
<head>

	<title>Eric & David - Projecte Welcome</title>
	<link rel="shortcut icon" href="TitleIcon.gif" />
	<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
	
	<img src="Title.png" class='Titulo'>
	<ul>
	<div class="container">

	<?php 
		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {

				echo "<div>";
				echo "<a href='profile/$name.html'>\n";
				echo "<br>";
				echo "<img src='img/$img' alt='Avatar' class='Images' title='$name'>\n";
				echo "<br>";
				echo "<h6>".$name."</h6>";
				echo "</div>";

				}
			}

?>
</body>
</html>


