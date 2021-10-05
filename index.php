<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
        	<h1><center>Equipo TeamSAJA</center></h1>
		<br></br>
        	<ul>

        	<?php 

			echo "<table>";
			$tabla2 = 0;
                	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {
                        	if(substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
                                	$name = substr($img,0,-4);
                                	$nameLowerCase = strtolower($name);
                                	if ($nameLowerCase ==  "joseparedes" || $nameLowerCase == "adriangofe" || $nameLowerCase == "samuelmillan" || $nameLowerCase == "alejandrogonzalez") {
						echo "<tr>";
						echo "<td><center><a href='profile/$name.html'>".$name."</center>";
                                        	echo "<center><img src='img/$img' width='225'></center>";
						echo "</a></td>";
						echo "</tr>";
					}
                                	echo "<div></div>";
                                	echo "</table>";
                        	}
                	}
        	?>
	</body>
</html>
