<!DOCTYPE html>
<html>
<head>
    <title>EL FABULOSO MUNDO DE AWS2</title>
    <meta charset="UTF-8">
    <style type="text/css">
	body{
		position: relative;
		background-color:#d0d3d4;
	}

	h1{
		text-align: center;
		text-decoration: underline;
		font-family: arial;
	}
	
	h2{
		padding-top: 20px;
		text-align: center;
	}

	a{
		position: relative;
		text-decoration: none;
		font-family: arial;
		color:black;
		background-color: white;
	}

	img{
		margin-left: 40px;
		margin-right: 40px;
		position: center;
		padding-top: 50px;
		width: 100px;
	}

	div{
		display: inline-block;
	}

</style>
</head>
<h1>EL FABULOSO MUNDO DE AWS2</h1>
<body>
<h2>Integrantes: </h2>
<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
			$name = substr($img,0,-4);
			echo"<div>";	
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img'><br>";
				echo $name."</a>";
				echo "<br /><br />";
			echo"</div>";
		}

	}
	
?>
</body>
</html>