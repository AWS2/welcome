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

                }else if(in_array($name.".jpg",scandir("./img",SCANDIR_SORT_ASCENDING))){
                    $imagen = $name.".jpg";

                }else if(in_array($name.".jpeg",scandir("./img",SCANDIR_SORT_ASCENDING))){
                    $imagen = $name.".jpeg";

                }else{
                    $imagen="";
                }
                echo "<div> <img src='img/$imagen' width='130' alt='$name'>";
                echo "<a href='profile/$name.html'>$name</a>";
                echo "</div>\n";

            }
        }
    ?>
</body>
</html>