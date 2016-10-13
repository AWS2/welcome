
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


</script>

<ul>
<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	
	if(isset($_GET['order'])){
		if($_GET["order"]=="alpha"){
			natcasesort($imgs);
		}
	}
	
	foreach( $imgs as $img ) {	
		if( substr($img,-3)=="jpg" ) {
			$name = substr($img,0,-4);
			echo "<li>\n";
			echo "<a href='profile/$name.html'>\n";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br />\n";
			echo "</li>\n\n";
		}
	}	
?>

</ul>
