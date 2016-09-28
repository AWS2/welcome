
<h1>AWS2 Matrix World</h1>

<table style="border: 2px solid red;">

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	$cnt = 0;
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" ) {
			$name = substr($img,0,-4);
			if( $cnt == 0) {
				echo "<tr>\n";
			}
			echo "<td style='border: 2px solid black; padding: 20px'>\n";
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
