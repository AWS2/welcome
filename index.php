<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles Esteve Terradas</title>
    <style>
        table {
            text-align: center;
            margin: auto;
            overflow:hidden;
            white-space:nowrap;
            text-overflow: ellipsis;
            width: 75%;
        }
        th {
            margin: auto;
            color: #FFF;
            background-color: #000080;
        }

        td{
            overflow:hidden;
            white-space:nowrap;
            text-overflow: ellipsis;
            width: 25%;
        }


    </style>
</head>
<body>
    <table>

    <th colspan=3><h1>Perfiles Esteve Terradas</h1></th>

	<?php
        $numero = 1;
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        $profiles = scandir("./profiles",SCANDIR_SORT_ASCENDING);
        echo "<tr>";
        foreach( $imgs as $img ) {
            if($numero %3 == 0){
                echo "</tr>";
            }
            $numero += 1;
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<td>";
            echo "\n<br><a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'></a>";
            echo "\n<br><a href='profile/$name.html'>".$name."</a>";
            echo "</td>";
        }


        
    ?>
    </table>
</body>
<footer> Esteve Terradas - Iker González - Xavi Martínez</footer>

</html>

