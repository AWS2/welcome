<body>
        <h1>Projecte Welcome 1</h1>
        <ul>
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "<div></div>";

        }
    ?>
    </il>
</body>
=======
<head>
	<link rel="stylesheet" href="prueba.css">
</head>
<body>	
	<div id="container"></div>
	<h1>Projecte Welcome 1</h1>

		<ul>
		<div class="inner">
		<?php

			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					$name = substr($img,0,-4);
					echo "<div class='inner'>";
					echo "<a class='imagenes' href='profile/$name.html'>";
					echo "<img src='img/$img' width='130'>";
					echo "<p>".$name."</p></a></div>";
				}
			}

		?>
	</div>

</body>
>>>>>>> 8b739871ca9ee965a6d476c808e62277e2471133
