<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            background-color: black;
            width: 1200px;
            color: whitesmoke;
            margin: auto;
            justify-items: center;
        }
        h1 {
            text-align: center;
        }
        .cuad {
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-items: center;
            float: left;
            margin: 10px;
            margin-bottom: 40px;
            padding: 15px;
            padding-left: 30px;
            padding-right: 30px;
            background-color: #1a1926;
        }

        a {
            text-decoration: none;
            color: whitesmoke;
            width: 150px;
            margin: 0;
            padding: 0;
        }
        img {
            max-width: 100%;
            height: 130px;
            margin: auto;
            align-content: center;
            align-self: center;
        }
        p {
            text-align: center;
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
                echo "<div class='cuad'>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img'>";
                echo "<p>$name</p>" . "</a>";
                echo "</div>";
            }
            ?>

    </ul>
</body>

</html>