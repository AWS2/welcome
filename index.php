<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">
		<title>¡El Maravilloso Mundo de AWS!</title>
	</head>
	<body>
			<h1>¡El Maravilloso Mundo de AWS!</h1>
			<div class="content">
				<div class="scroll">
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
				
	</div>

	</body>
</html>
