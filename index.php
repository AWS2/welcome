<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Webs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
        <section>
        <?php 
                
            $htmls = scandir("./profile",SCANDIR_SORT_ASCENDING);
            $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);

            foreach( $htmls as $html ) {
                if( $html=="." || $html==".." )
                    continue;
                if( substr($html,-4)=="html"){
                    $name = substr($html,0,-5);
                }
                $imageValidator = false;
                foreach( $imgs as $img ) {
                    if( $img=="." || $img==".." )
                        continue;
                    if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                        $name2 = substr($img,0,-4);
                    }else if (substr($img,-4)=="jpeg") {
                        $name2 = substr($img,0,-5);
                    }
                    if ($name == $name2){
                        $imgName = $img;
                        $imageValidator = true;
                    }else if ($imageValidator==false){
                        $imgName = "usuario.png";
                    }
                }
                
                echo "<article>\n         ";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$imgName' width='130'><br>";
                echo $name."</a>\n      ";
                echo "</article>\n          ";
            }
        ?>
        </section>
</body>
</html>