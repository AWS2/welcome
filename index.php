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
			<div class="content">
				<div class="scroll">
					<!-- <div id="ex3">
        <img src="http://lorempixum.com/400/133"><p>Some Text</p>
    </div>
  -->
					<?php
                $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
                foreach ($imgs as $img) {
                    if (substr($img, -3)=="jpg" or substr($img, -3)=="png" or substr($img, -4)=="jpeg") {
                        $name = substr($img, 0, -4);
                        echo "<a href='profile/$name.html'>";
                        echo "<img src='img/$img' width='130'><br/>";
                        echo $name."</a>";
                        echo "<br /><br />";
                    }
                }
                ?>
				</div>
				<div class="student-description">
					
				</div>
				<?php
        function curPageURL()
        {
            $pageURL = 'http';
            $pageURL .= "://";
            if ($_SERVER["SERVER_PORT"] != "80") {
                $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
            } else {
                $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            }
            return $pageURL;
        }
        ?>
	</div>

	</body>
</html>
