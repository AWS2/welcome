<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projecte Welcome Miguel Ángel López</title>
    <style>
        /*Para todo le ponemos el estilo arial o sans-serif, fondo blanco "gastado", 0 de margen, 20 px de padding, lo hacemos flotante y todo justificado al centro.*/ 
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        /*Añadimos max-width de 800px para no pasarse en tamaño el container, el fondo directamente blanco, otro padding en su interior de 20px y 8px de redondeado en los bordes.*/
        .profileContainer {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        /*Alinemaos el titulo al centro y le ponemos un color oscuro tirando a gris */
        h1 {
            text-align: center;
            color: #333;
        }
        /* */
        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        li {
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 150px;
            text-align: center;
            padding: 10px;
            transition: box-shadow 0.3s ease;
        }
        img {
            max-width: 100%;
            border-radius: 6px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            display: block;
        }
        a:hover {
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
