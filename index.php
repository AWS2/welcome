
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="prueba.css" rel="stylesheet" type="text/css">
</head>
<body>
	

<h1>AWS2 Matrix World</h1>


<form action="upload-image.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
</form>




<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		echo "<div class='float'>";
		if( substr($img,-3)=="jpg" ) {
			$name = substr($img,0,-4);
			echo "<li>\n";
			echo "<a href='profile/$name.html'>\n";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br />\n";
			echo "</li>\n\n";
			
		}
		echo "</div>";
	}
	
?>


</ul>

</body>
</html>