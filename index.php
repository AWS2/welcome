
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Projecte Welcome 1</h1>
    <div class="container">
    <?php
    //escanea el directorio "img" y devuelve una lista de archivos en orden ascendente alfa
    $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);

    //for para recorrer cada archivo en la lista obtenida
    foreach( $imgs as $img ) {

        //omite los elementos "." y ".." (que representan el directorio actual y el directorio padre)
        if( $img == "." || $img == ".." )
            continue;

        //verifica si el archivo tiene una extensión "jpg" o "png"
        if( substr($img, -3) == "jpg" or substr($img, -3) == "png") {
            //si lo es obtiene el nombre del archivo sin la extensión (últimos 4 caracteres(.png por ej))
            $name = substr($img, 0, -4);

        //si el archivo tiene una extensión "jpeg", hace lo mismo pero con los 5 ultimos
        } else if (substr($img, -4) == "jpeg") {
            $name = substr($img, 0, -5);
        }

        //crea una división (div) con la clase 'item' para facilitar el css
        echo "<div class='item'>";

        //crea un enlace hacia un perfil HTML utilizando el nombre del archivo (sin extensión)
        echo "<a href='profile/$name.html'>";

        //muestra la imagen correspondiente, con un ancho de 130 píxeles, proveniente del directorio 'img'
        echo "<img src='img/$img' width='130'>";

        //salto de línea para mostrar el nombre debajo de la foto
        echo "<br>";

        //muestra el nombre del archivo (sin extensión) como parte del enlace
        echo $name . "</a>";

        //cierra el div
        echo "</div>";
    }
?>

    </div>
    
</body>
    

</html>



