<header>
<link rel="stylesheet" href="styles.css">
</header>
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
            echo "<div class = 'perfil'>";
            echo "<img src='img/$img' width='130'>";
            echo "<div class= 'link'>";
            echo "<a href='profile/$name.html'>";
            echo $name."</a>";
            echo "</div>"
            echo "</div>";
        }
    ?>

</body>

