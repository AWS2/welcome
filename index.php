<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Projecte Welcome 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .imagen {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            padding: 10px;
            width: 180px;
            transition: 0.3s;
        }

        .imagen:hover {
            transform: scale(1.05);
        }

        .imagen img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .nombre {
            margin-top: 8px;
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>

    <div class="galeria">
        <?php
            $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
            foreach ($imgs as $img) {
                if ($img == "." || $img == "..") continue;

                $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
                    $name = pathinfo($img, PATHINFO_FILENAME);

                    echo "<div class='imagen'>";
                    echo "<a href='profile/$name.html'>";
                    echo "<img src='img/$img' alt='$name'>";
                    echo "<div class='nombre'>$name</div>";
                    echo "</a>";
                    echo "</div>";
                }
            }
        ?>
    </div>
</body>
</html>
