<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body background="blue">

	<link rel="stylesheet" type="text/css" href="index.css">
	<h1>Projecte Welcome 1</h1>
	<ul>	</ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				
				echo " <a href='profile/$name.html'>\n ";
				
				echo "       ".	"<img src='img/$img' width='150\n' alt='avatar' class='image' title='$name'>";
			
				
				echo " \n"	.$name."</a>\n";				

				//echo "<div></div>";
				;
			}
		}

	?>


</body>
</html>