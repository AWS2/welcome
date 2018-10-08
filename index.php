<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="body">
    <h1 class="h1"> Concurs CSS Marc i Khalid</h1>
    <div>

    <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {   
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
                $name = substr($img,0,-4);
                echo "<div class='c'>";
                echo "<a class='a' href='profile/$name.html'>";
                echo "<img class='img' src='img/$img'>";
                echo $name."</a>";
               
                echo "</div>";
                ;
            }
        }

    ?>
    </div>
</body>
</html>
