<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome 1</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            user-select: none;
            background-color: #eef0f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ul {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            list-style-type: none;
        }
        div {
            height: 300px;
            width: 300px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: white;
            margin: 20px;

        }
        ul li {
            display:inline-block;
        }
        img {
            height: 80%;
            width: 100%;
            z-index: 2;
            position: sticky;
            top: 1px;
        }
        a {
            z-index: 3;
        }
    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <ul>
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<div>\n";
            echo "  <li><a href='profile/$name.html'><img src='img/$img'></a><a href='profile/$name.html'>$name</a></li>\n";
            echo "</div>\n";

        }
        ?>
    </ul>
</body>
</html>
