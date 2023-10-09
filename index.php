<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        ul {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        li {
            display: flex;
            flex-direction: column;
            height: 400px;
            width: 300px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 5px 5px 40px #888888;
            margin-bottom: 50px;
        }

        li a {
            text-align: center;
            color: rgb(255, 0, 255);
            text-decoration: none;
            font-weight: 900;
        }

        img {
            width: 100%;
            max-height: auto;
            aspect-ratio: 1/1;
            object-fit: cover;
            object-position: top;
        }
    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <ul>
    <?php
    $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
    foreach( $imgs as $img ) {
        if ( $img=="." || $img==".." )
            continue;
        if ( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
            $name = substr($img,0,-4);
        } else if (substr($img,-4)=="jpeg") {
            $name = substr($img,0,-5);
        }
        echo "<li type='none'><a href='profile/$name.html'>";
        echo "<img src='img/$img' width='130'>";
        echo $name."</a></li>";
    }
    ?>
    </ul>
</body>
</html>