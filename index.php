Paumafe — hoy a las 11:05
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome 1</title>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <ul>

    <?php 
        $htmls = scandir("./profile",SCANDIR_SORT_ASCENDING);
        foreach($htmls as $html){

            if (strlen($html) > 5){
                $name = substr($html,0,-5);
                if(in_array($name.".png",scandir("./img",SCANDIR_SORT_ASCENDING))){
                    $imagen = $name.".png";
                   //echo substr($html,0,-5)." 1";
                    //echo "<br>";
                }else if(in_array($name.".jpg",scandir("./img",SCANDIR_SORT_ASCENDING))){
                    $imagen = $name.".jpg";
                    //echo substr($html,0,-5)." 2";
                    //echo "<br>";
                }else if(in_array($name.".jpeg",scandir("./img",SCANDIR_SORT_ASCENDING))){
                    $imagen = $name.".jpeg";
                    //echo substr($html,0,-5)." 3";
                    //echo "<br>";
                }
                echo "<div><a href='profile/$name.html'>";
                echo "<img src='img/$imagen' width='130'>";
                echo $name."</a>";
                echo "</div>\n";

            }
        }
        // $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        // foreach( $imgs as $img ) {
        //     if( $img=="." || $img==".." )
        //         continue;
        //     if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
        //         $name = substr($img,0,-4);
        //     }else if (substr($img,-4)=="jpeg") {
        //         $name = substr($img,0,-5);
        //     }
        // echo "<div><a href='profile/$html.html'>";
        // echo "<img src='img/$imagen' width='130'>";
        // echo $name."</a>";
        // echo "</div>\n";
        //}
    ?>
</body>
</html>