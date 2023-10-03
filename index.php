<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1 class="title">Projecte Welcome 1</h1>
    <table class="imageTable">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
        </tr>
        <?php 
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach($imgs as $img) {
            if($img == "." || $img == "..") {
                continue;
            }
            if(substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } elseif(substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<tr>";
            echo "<td><a class='tableImage' href='profile/$name.html'><img src='img/$img' width='130'></a></td>";
            echo "<td class='tableName'><a href='profile/$name.html'>$name</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
