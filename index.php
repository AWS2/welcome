<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #708090, #c0c0c0);
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 10px;
            margin: 0px;
            background-color: black;

        }

        ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        li {
            margin: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
        }

        img {
            width: auto;
            height: 75px;
            border: 2px solid #333;
            border-radius: 5px;
        }

        a:hover {
            filter: brightness(70%);

        }

        a:hover img {
            border: 4px solid #333;
        }
    </style>
</head>

<body>
    <h1>Projecte Welcome 1</h1>
    <ul>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..")
                continue;
            if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<li><a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo "<br>$name</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>

</html>