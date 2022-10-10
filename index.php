<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles Esteve Terradas</title>
    <style>

        body{
            background-color: #3366FF;
        }

        table {
            text-align: center;
            margin: auto;
            overflow:hidden;
            white-space:nowrap;
            text-overflow: ellipsis;
            width: 75%;
            background-color: white;
        }
        th {
            margin: auto;
            color: #FFF;
            background-color: #000080;
            border-radius: 10px 10px 0px 0px;
        }

        td{
            overflow:hidden;
            white-space:nowrap;
            text-overflow: ellipsis;
            width: 25%;
        }

        footer{
            text-align:center;
            padding-top:5px;
        }


    </style>
</head>
<body>
    <table>

    <th colspan=3><h1>Perfiles Esteve Terradas</h1></th>

	<?php
        $numero = 1;
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        $profiles = scandir("./profile",SCANDIR_SORT_ASCENDING);
        $imgFormat = ["jpg", "jpeg", "png"];
        echo "<tr>";

        foreach( $profiles as $prof ) {
            if($numero %3 == 0){
                echo "</tr>";
            }
            $numero += 1;
            if( $prof=="." || $prof==".." ){
                continue;
            }if (substr($prof,-4)=="html") {
                $name = substr($prof,0,-5);
                foreach($imgFormat as $format){
                    if(file_exists("img/".$name.".".$format)){
                        $imgProfile = $name.".".$format;
                    }
                }
                echo "<td>";
                echo "\n<br><a href='profile/$prof'>";
                echo "<img src='img/$imgProfile' width='130'></a>";
                echo "\n<br><a href='profile/$prof'>".$name."</a>";
                echo "</td>";
            }
            
        }


        
    ?>
    </table>
</body>
<footer> Esteve Terradas - Iker González - Xavi Martínez</footer>

</html>