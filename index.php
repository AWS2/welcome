<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="title">La MASA team</h1>
    <table class="table">
        <tr>
            <th>Imagen</th>
            <th>User</th>
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
