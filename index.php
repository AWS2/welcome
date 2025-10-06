<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projecte Welcome Miguel Ángel López</title>
    <style>
        /* El cuerpo de la pagina */
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        /* el div de todo */
        .profileContainer {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        /* Titulo */
        h1 {
            text-align: center;
            color: #333;
        }
        /* La lista donde estan todas las imagenes y enlaces */
        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        /* Donde se encuentra la imagen y el texto con el enlace */
        li {
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 150px;
            text-align: center;
            padding: 10px;
        }
        /* las imagenes */
        img {
            max-width: 100%;
            border-radius: 6px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        /* Los enlaces */
        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            display: block;
        }
        /* Los enlaces cuando esta el raton encima */
        a:hover {
            color: #0c66c7ff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="profileContainer">
        <h1>Projecte Welcome Miguel Ángel López</h1>
        <ul>
            <?php
                $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
                foreach ($imgs as $img) {
                    if ($img === "." || $img === "..") continue;
                    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                    if (in_array($ext, ["jpg", "jpeg", "png"])) {
                        $name = pathinfo($img, PATHINFO_FILENAME);
                        $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
                        $imgSrc = htmlspecialchars("img/$img", ENT_QUOTES, 'UTF-8');
                        $profileLink = htmlspecialchars("profile/$safeName.html", ENT_QUOTES, 'UTF-8');
                        echo "<li>";
                        echo "<a href='{$profileLink}'>";
                        echo "<img src='{$imgSrc}' alt='Foto de {$safeName}' loading='lazy'>";
                        echo $safeName;
                        echo "</a>";
                        echo "</li>";
                    }
                }
            ?>
        </ul>
    </div>
</body>
</html>
