<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: red;
        }
        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        li {
            width: calc(25% - 20px); /* Establece el ancho de cada elemento de la lista (25% - margen) */
            margin-bottom: 20px; /* Espacio entre filas */
            text-align: center;
        }
        img {
            border: 2px solid black;
            max-width: 100%;
            max-height: 150px;
        }
    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <ul>
    <?php 
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..") {
                continue;
            }
            if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<li><a href='profile/$name.html'>";
            echo "<img src='img/$img'>";
            echo "<div>$name</div></a></li>";
        }
    ?>
    </ul>
</body>
</html>
