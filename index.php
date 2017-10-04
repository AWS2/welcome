<head>
	<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet"> 

<style>
body {
	background-image: url("patron.jpg");
	padding-left: 2.5em;
}

h1{
	margin-top: 1em;
	font-size: 50px;
	font-family:Helvetica;
	text-shadow: 0px 0px 6px rgba(255,255,255,0.7);
	color: white;
	text-align: center;
}

p{
	margin-top: 1em;
	font-size: 20px;
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

div p {
	font-style: none;
	text-decoration: none;
	color: black;
	font-family: 'Asap Condensed', sans-serif;
	font-size: 1.2em;
	line-height: 0.5em;
	margin:0;
}

</style>
</head>
<body>
	<h1>La p**a m****a de vida de AWS2</h1>
	<?php
			//codi per mostrar un missatge de benvinguda utilitzant cookies
			if(isset($_COOKIE['AboutVisit'])){ 
		 		$last = $_COOKIE['AboutVisit']; } 
		 		$year = 31536000 + time() ; 
		 		//aixo afegeix un any al temps actual per l'expiració de cookies 
		 		setcookie(AboutVisit, time (), $year) ; 
		 	if (isset ($last)){
		 		$change = time () - $last; 
		 		if($change > 86400){
					echo "<p>Benvingut de nou! <br> L'última visita va ser el ". date("m/d/y",$last); 
					echo "</p>";
					// Aquí imprimeixo un missatge en cas que fagi mes d'un dia que han visitat la pàgina
				}
		 		else{ 
		 			echo "<p>Hola! Que has oblidat res?!"; 
		 			echo "</p>";
					//aquí mostro un missatge si la persona visita la pàgina mes d'un cop el mateix dia
				} 
			}
			else{ 
		 		echo "<p>Benvingut a la nostra clase!"; 
		 		echo "</p>";
		 		//missatge en cas que visiti per primer cop la pàgina 
		 	} 
	?>

	<ul>
		<?php 
			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {
				
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					$name = substr($img,0,-4);
					echo "<div><img src='img/$img' width='130'><br />";
					echo "<p>";
					echo $name."</p><br><br>";
					echo "<a href='profile/$name.html'><button>Mostrar página</button></a></div>";
				}
			}
		?>
	</ul>
</body>
