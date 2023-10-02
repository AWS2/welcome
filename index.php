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
        ul li {
        display:inline-block;
        }
        img {
            height: 100%;
            width: 100%;
            z-index: -1;
            position: sticky;
            top: 1px;
        }
        a {
            z-index: 10;
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
            echo "<li><a href='profile/$name.html'><img src='img/$img'></a><a href='profile/$name.html'>$name</a></li>";

        }
        ?>
    </ul>
</body>
</html>
