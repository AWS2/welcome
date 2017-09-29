<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text|Raleway" rel="stylesheet"> 
</head>

<body>
	<header><h1>EL FABULOSO MUNDO DE AWS2</h1></header>
<div id="contenedor">
<ul>
<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
			$name = substr($img,0,-4);
			echo "<div class='caja'><a href='profile/$name.html'>";
			echo "<img src='img/$img' width='130'><br/>";
			echo $name."</a>";
			echo "<br /><br /></div>";
		}
	}
?>
</ul>
</div>
</body>

