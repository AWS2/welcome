<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice Imagenes</title>
    <style>
        body{
            margin:0;
            padding: 0;
            background-color:grey;
        }
        h1{
            text-align:center;

        }
        ul{
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            list-style: none;
            justify-content:center;
        }
        li{
            overflow:scroll;

        }
        img{
            width:50%;
            margin:auto;
        }
        div{
            width:300px;
            height:300px;
            background-color: rgba(255, 255, 255, 0.7);
            text-align:center;
            border:1px solid black;
            border-radius: 5px;
            font-size:20px;
            display:flex;
        }
        a{
            display:flex;
            flex-direction:column;
            margin:auto;
            width:100%
        }
    </style>
</head>
<body>
<h1>Projecte Welcome 1</h1>
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
            echo "<li><div><a href='profile/$name.html'>";
            echo "<img src='img/$img'>";
            echo $name."</a></div></li>\n";

        }
    ?>

</body>
</html>
