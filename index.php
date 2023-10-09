<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
    <style>
        
        
body {
    background-color: #5aa1a8;
    font-family: Arial, sans-serif;
    margin: 0;
}

h1 {
    text-align: center;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    max-width: 400px;
    margin: 0 auto;
}

.card {
    margin: 10px;
    padding: 10px;
    text-align: center;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px black;
}

.card img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.card a {
    text-decoration: none;
    color: #333;
}
    </style>
</head>
<body>
    <h1>Proyecto Welcome 1</h1>
    <div class="container">
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..") continue;
            if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<div class='card'>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' alt='$name'>";
            echo "<p>$name</p>";
            echo "</a></div>";
        }
        ?>
    </div>
</body>

</html>

