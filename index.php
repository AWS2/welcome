<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome 1</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        div { 
            display: flex; 
            justify-items: space-between; 
            align-items: center;
            margin: 16px;
            gap: 16px;
        }
        img {
            border: 2px solid black;
            width: 130px;
        }
    </style>
</head>
<body>
    
<h1>Projecte Welcome 1</h1>
<ul>
<?php
    $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
    foreach( $imgs as $img ) {
        if ($img == "." || $img == "..")
            continue;
        if (substr($img,-3) == "jpg" or substr($img,-3) == "png") {
            $name = substr($img,0,-4);
        } else if (substr($img,-4) == "jpeg") {
            $name = substr($img,0,-5);
        }
        echo "<div>\n";
        echo "  <img src='img/$img'>\n";
        echo "  <a href='profile/$name.html'>\n";
        echo "    ".$name."\n";
        echo "  </a>\n";
        echo "</div>\n\n";

    }
?>
</ul>

</body>
</html>