<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Projecte Welcome 1</title>
</head>

<body id="cuerpo" background="fondoWelcome.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('rotation');
    }, function() {
        $(this).removeClass('rotation');
    });
});
</script>

	<h1 align="center" id="encabezado">Projecte Welcome 1</h1>
	<link rel="stylesheet" type="text/css" href="welcome.css" />

	<ul id="alumnos">
<div id="opaco">
	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_DESCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='160' height='160'  title='$name' class='zoom'";
				;
			}
		}

	?>
</div>

</body>
