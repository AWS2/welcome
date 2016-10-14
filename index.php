<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS FlexBox Style</title>
	<link rel="stylesheet" type="text/css" href="flexbox.css">
</head>
<body>
	

<h1>AWS2 Matrix World</h1>

<form action="upload-image.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
</form>

<button id="sensitive">Ordenar (case sensitive)</button>

<button id="insensitive">Ordenar (case insensitive)</button>


<script type="text/javascript">
    document.getElementById("sensitive").onclick = function () {	
    	location.href = "index.php";
    };
</script>

<script type="text/javascript">
    document.getElementById("insensitive").onclick = function () {	
    	location.href = "index.php?order=alpha";
    };
</script>

<ul>
<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	
	if(isset($_GET['order'])){
		if($_GET["order"]=="alpha"){
			natcasesort($imgs);
		}
	}

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