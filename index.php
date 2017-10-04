<head>
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet"> 

<style>
body {
	background-image: url("patron.jpg");
	padding-left: 2.5em;
}

h1 {
	margin-top: 1em;
	font-size: 50px;
	font-family:Helvetica;
	text-shadow: 0px 0px 6px rgba(255,255,255,0.7);
	color: white;
	text-align: center;
}

div {
	background-image: url("patron2.jpg");
	float: left;
	width: 12em;
	height: 16em;
	margin: 1em;
	text-align: center;
	border-radius: 0.7em;
}

div:hover{
	transform: scale(1.10);
	box-shadow: 7px 7px 2px #000000;
}

img {
	margin: 1em;
	margin-bottom: 0;
	display: block;
	width: 10em;
	height: 10em;
}

button {
	width: 10em;
	height: 2em;
	font-family: 'Asap Condensed', sans-serif;
	background-color: #2d3444;
	border-radius: 0.5em;
	border-style: none;
	color: white;
	box-shadow: 0px 5px 0px #111319;
}

a {
	font-style: none;
	text-decoration: none;
	color: black;
	font-family: 'Asap Condensed', sans-serif;
	font-size: 1.3em;
}

</style>
</head>
<body>
<h1>La p**a m****a de vida de AWS2</h1>

<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
			$name = substr($img,0,-4);
			echo "<div><img src='img/$img' width='130'><br />";
			echo "<a href='profile/$name.html'>";
			echo $name."</a><br><br>";
			echo "<button>Mostrar página</button></div>";
		}


	}
	
?>

</ul>
</body>
