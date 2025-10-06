<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome 25/26</title>
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 Columnas */
            gap: 20px; /* Espacio entre las tarjetas */
            padding: 20px;
            align-items: stretch;
        }
        .card {
            background: lightgrey;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 10px;
            text-align: center;
            transition: transform 0.2s ease;
            width: 90%;

        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover; /* Para que se vean proporcionalmente */
            border-radius: 8px;
            display: flex;
        }
        h1 {
            text-align: center;
            color: darkblue;
            margin: 5px, 5px, 5px, 5px;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <h1>Projecte Welcome  1 - Biel Marín Gonzàlez</h1>
    <div class="grid">
    <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            } else {
                continue;
            }

            // Tarjeta de imagen y nombres
            echo "<div class='card'>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img'>";
                echo "<h3>$name</h3>";
                echo "</a>";
            echo "</div>\n";
        }
    ?>
    </div>
</body>
</html>