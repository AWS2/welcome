<h1>WELCOMEE</h1>

<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,(-3 || -4))==("jpg" || "png" || "jpeg")) {
			$name = substr($img,0,-4);
			echo "<a href='profile/$name.html'>";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br />";
		}


	}
	
?>

</ul>