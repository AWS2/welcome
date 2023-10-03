<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <table>
        <tr>
            <th>Columna 1</th>
            <th>Columna 2</th>
        </tr>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..") continue;
            if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<tr>";
            echo "<td><a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo "</a></td>";
            echo "<td>$name</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
