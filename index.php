<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">
		<title>¡El Maravilloso Mundo de AWS!</title>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body class="cool">
		<header class="cool">
			<h1>¡El Maravilloso Mundo de AWS!</h1>
		</header>
		<div class="container">
					<?php
                $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
                foreach ($imgs as $img) {
                    if (substr($img, -3)=="jpg" or substr($img, -3)=="png" or substr($img, -4)=="jpeg") {
                        $name = substr($img, 0, -4);
                        echo "<div style='margin: 2vw;'>";
												echo "<h2><a class='name' href='profile/$name.html'><p>" . $name ."</p></a></h2>";
                        echo "<div class='stack twisted' style='width:10vw'>";
                        echo "<img src='img/$img' style='width:10vw'>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
          ?>
		</div>
	</body>
</html>
