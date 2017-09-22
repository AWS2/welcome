<header align="center">
<style>
	body{
		background-color:#d0d3d4;
	}
	h1{
		text-align: center;
		text-decoration: underline;
		font-family: arial;
	}
</style>
<h1>EL FABULOSO MUNDO DE AWS2</h1>
</header>

<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
			$name = substr($img,0,-4);
			echo "<a href='profile/$name.html'>";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br />";
		}


	}
	
?>

</ul>
