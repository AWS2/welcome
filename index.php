<!DOCTYPE html>
<html>
<head>
	<title>Página Welcome</title>
</head>
<body background="giphy.gif">
	<script type="text/javascript">
		if ( window.addEventListener ) {  
		  var state = 0, konami = [38,38,40,40,37,39,37,39,66,65];  
		  window.addEventListener("keydown", function(e) {  
		    if ( e.keyCode == konami[state] ) state++;  
		    else state = 0;  
		    if ( state == 10 )  
		      window.location = "konami.html";
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
				echo "<img src='img/$img'>\n";
				//echo "<div class='text'>";
				//echo $name. "</a>\n";
				//echo "</div>\n";
				echo "</div>\n";
				;
			}
		}

	?>
		
</body>
</html>


<link rel="stylesheet" href="style.css" type="text/css">

