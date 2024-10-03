<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projecte Welcome 1</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
        <h1>Projecte Welcome 1</h1>
        <ul>
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach($imgs as $img) {
            if ($img=="." || $img=="..")
                continue;
            if (substr($img,-3)=="jpg" || substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            } elseif (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            
            if (isset($name)){
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' width='130'>";
                echo "<p>".$name."</p></a>";
            }
        }
    ?>
    </ul>
</body>
</html>