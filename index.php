<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto</title>
    <style>
        body {
            background-color: #87CEEB;
            font-family: Arial, sans-serif;
            padding: 10px;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        ul {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            text-align: center;
            padding: 15px;
        }

        li {
            margin: 40px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
            background-color: #fff;
        }

        a {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
        }

        img {
            margin: 10px;
            width: 70%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <ul>
        <?php 
            $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
            foreach ($imgs as $img) {
                if ($img == "." || $img == "..") continue;
                if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                    $name = substr($img, 0, -4);
                } else if (substr($img, -4) == "jpeg") {
                    $name = substr($img, 0, -5);
                }
                echo "<li>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' width='130'>";
                echo $name."</a>";
                echo "</li>";
            }
        ?>
    </ul>
</body>
</html>
