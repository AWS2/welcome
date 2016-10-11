
<h1>AWS2 Matrix World</h1>

<table cellspacing=0>

<form action="upload-image.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
</form>


<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	$cnt = 0;
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" or substr($img,-3)=="JPG" or substr($img,-3)=="png" or substr($img,-3)=="PNG" or substr($img,-3)=="gif" or substr($img,-3)=="GIF" ) {
			$name = substr($img,0,-4);
			if( $cnt == 0) {
				echo "<tr>\n";
			}
			echo "<td style='border: 2px solid black; background-color: red; padding: 20px'; >\n";
			echo "<a href='profile/$name.html'>\n";
			echo "<img src='img/$img' width='130'><br/>\n";
			echo $name."</a>\n";
			echo "</td>\n\n";
			$cnt++;
			if( $cnt == 5 ){
				echo "</tr>\n";
				$cnt = 0;
			}
		}
	}
	
?>

</table>
