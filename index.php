<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Projecte Welcome 1</h1>
        <ul>
            <li>
                <?php
                $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
                $profiles = scandir("./profile",SCANDIR_SORT_ASCENDING);
                foreach( $profiles as $profile ) {
                    if( $profile=="." || $profile==".." ){
                        continue;
                    }     
                    if( substr($profile,-3) == "html" or substr($profile,-3) == "html"){
                        $name = substr($profile,0,-4);
                    }else if (substr($profile,-4) == "html") {
                        $name = substr($profile,0,-5);
                    }
                    echo "\n";
                    echo "\n" . "<a href='profile/$name.jpg'>";
                    echo "<img src='img/$name.jpg' width='130'>";
                    echo $name."</a>" . "\n";
                    echo "\n" . "<div></div>" . "\n";

                }
            ?>
            </li>
            
        </ul>
        <br>
</body>
</html>
