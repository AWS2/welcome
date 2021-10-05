<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<div style="width:100%;display:flex;justify-content:center;margin-bottom:30px">
	<h1>Projecte Welcome 1</h1>
</div>
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		
		echo "<div style='display:flex;width:100%;flex-wrap:wrap'>";
		echo "<table style='margin: 0 auto;'>";
		
		$currentRow = 0; $maxRows = 4;
		foreach( $imgs as $img ) {
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				
				if ($currentRow == 0) echo "<tr>";

				echo "<td><div>";
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo $nameLength = (strlen($name) > 10) ? substr($name,0,8) . "</a>" : $name . "</a";
				echo "</div></td>";
				
				$currentRow++;
				if ($currentRow >= $maxRows) {
					echo "</tr>";
					$currentRow = 0;
				}
			}
		}
		
		echo "</table>";
		echo "</div>";
	?>

</body>
