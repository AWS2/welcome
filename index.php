<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Pau Maestre</title>
    <style>
        body {
            background-color: grey;
            margin-left: 10%;
            margin-right: 10%;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
        h1 {
            text-align: center;
        }
        ul {
            justify-content: space-between;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;    
        }
        li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            list-style-type: none;
            align-items: center;
            width: 130px;
            overflow: hidden;
        }
        a {
            text-decoration: none;
            
        }

    </style>
</head>
<body>
<h1>Projecte Welcome 1</h1>
<ul>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..")
                continue;
            if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }
            echo "<li>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130' height='130'>";
            echo "<br>".$name ."</a>\n";
            echo "<li>";
        }
        ?>
    </ul>
</body>
</html>
