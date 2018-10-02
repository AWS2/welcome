<!DOCTYPE html>
<html>
<head>
	<title>Página Welcome</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<img class="bg" src="giphy.gif">
	<script type="text/javascript">
		if ( window.addEventListener ) {  
		  var state = 0, konami = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13];  
		  window.addEventListener("keydown", function(e) {  
		    if ( e.keyCode == konami[state] ) state++;  
		    else state = 0;  
		    if ( state == 11 )  
		      window.location = "konami/konami.html";
		}, true);  
		}  
	</script>
	<h1>Projecte Welcome 1</h1>
	<ul>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);

				echo "<div class='img_texto'>\n";
				echo "<a href='profile/$name.html'>\n";
				echo "<img class='avatar' src='img/$img'>\n";
				echo "</div>\n";
				;
			}
		}

	?>
		
</body>
</html>