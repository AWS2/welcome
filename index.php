<!DOCTYPE html>
<html lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Xavi Gómez">
    <meta name="description" content="Llistat d'alumnes de Desenvolupament d'Aplicacions Web de l'institut Esteve Terradas i Illa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="institut cornella, alumnes ieti, daw, web development, programadors web">
    <title>Projecte Welcome 1 - Llistat d'alumnes DAW IETI</title>
    <style>
        body {
            background-color: #FCF8A2;
        }
        ul {
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            list-style : none;
        }
        li {
            width: 20%;
            text-align: center;
        }
        li  img {
            width: 90%;
            margin: 0 5%;
        }
        li span {
            display: block;
        }

    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <p>Llistat d'alumnes del Cicle formatiu de grau superior de Desenvolupament d'aplicacions Web de l'institut Esteve Terradas i Illa.</p>
    <ul>
        <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<li>\n";
            echo "\t<a href='profile/$name.html'>\n";
            echo "\t<img src='img/$img' width='130' alt='$name'>\n";
            echo "\t<span>".$name."</span></a>\n";
            echo "</li>\n";
        }
        ?>
    </ul>
</body>
</html>