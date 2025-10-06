<?php

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>
        <meta charset='UTF-8'>
        <title>Project Welcome - Hector</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 20px;
            }
            .gallery {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }
            .photo {
                text-align: center;
                background-color: white;
                padding: 10px;
                border-radius: 8px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                transition: transform 0.2s;
            }
            .photo:hover {
                transform: scale(1.05);
            }
            .photo img {
                width: 130px;
                height: auto;
                border-radius: 5px;
            }
            .photo a {
                text-decoration: none;
                color: #333;
                display: block;
                margin-top: 5px;
                font-weight: bold;
            }
        </style>
      </head>";
echo "<body>";
echo "<h2>Galería de Usuarios</h2>";
echo "<div class='gallery'>";

$imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
foreach ($imgs as $img) {
    if ($img == "." || $img == "..") continue;

    $ext = strtolower(substr($img, -4));
    if ($ext == ".jpg" || $ext == ".png") {
        $name = substr($img, 0, -4);
    } else if (strtolower(substr($img, -5)) == ".jpeg") {
        $name = substr($img, 0, -5);
    } else {
        continue;
    }

    echo "<div class='photo'>";
    echo "<a href='profile/$name.html'>";
    echo "<img src='img/$img' alt='$name'>";
    echo "<span>$name</span></a>";
    echo "</div>";
}

echo "</div>";
echo "</body></html>";
?>

