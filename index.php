<head>
    <link rel="stylesheet" href="estilopagina.css">
    <title>Meet the future Professionals</title>
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	
	<div class = "main">
	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            $divClass = "plebe";
            if( $img=="." || $img==".." )
                continue;

            if ($img == "AA0DavidSanchezMatilla.jpg"){
                $divClass = "masterChief";
                $name = "AA0DavidSanchezMatilla";

            }else if($img == "GeanfrancoBiagi.jpeg"){
                $divClass = "masterChief";
                $name = "GeanfrancoBiagi";

            }else if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);

            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            } 
            echo "<div class = $divClass>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "</div>";
            echo "\n";
        }
    ?>
    </div>
</body>
