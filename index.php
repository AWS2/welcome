<head>
	  <link rel="stylesheet" href="main.css">
	  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Krona+One&family=PT+Serif:wght@700&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>		
	<div  class="titulo">
		<h1>Projecte Welcome 1</h1>
		<p>HECHO POR SERGIO GARCIA Y DAVID CASTILLA</p>
	</div>
	<div class="general">
		<?php 

			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			$count = 0;
			
			foreach( $imgs as $img ) {
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
						$name = substr($img,0,-4);
						echo '<div class="tamaño">';
						echo "<div class='decor1'><a href='profile/$name.html'>" . $name .'</th></a></div>';
						echo "<div class ='decor2'><img src='img/$img' width='130' height='130'></div>";
						echo "</div>";
				}
			}

		?>
	</div>

</body>
