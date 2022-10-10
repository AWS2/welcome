<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Welcome</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1><strong><u>Projecte Welcome 1</u></strong></h1>
    </header>
    <div class="Container">
        <ul>
        <?php 
            $pags = scandir("./profile",SCANDIR_SORT_ASCENDING);
            $imags = scandir("./img",SCANDIR_SORT_ASCENDING);

            foreach( $pags as $pag ) {
                if( $pag=="." || $pag==".." ){
                    continue;
                }
                elseif( substr($pag,-4)=="html" ){
                    $name = substr($pag,0,-5);
                }

                foreach ($imags as $imag) {
                    if( $pag=="." || $pag==".." ){
                        continue;
                    }
                    elseif ($name === substr($imag,0,-4)){
                        echo "<div class='subcontainer'>";
                        echo "<li>";
                        echo "<a href='profile/$name.html'>";
                        echo "<img alt='$name' src='img/$imag'>";
                        echo $name."</a>";
                        echo "</li>";
                        echo "</div>";
                        echo "\n";


                    }

                    elseif($name === substr($imag,0,-5)){
                        echo "<div class='subcontainer'>";
                        echo "<li>";
                        echo "<a href='profile/$name.html'>";
                        echo "<img alt='$name' src='img/$imag'>";
                        echo $name."</a>";
                        echo "</li>";
                        echo "</div>";
                        echo "\n"


                    }

                    }
                }

        ?>
        </ul>
    </div>
</body>
</html>

