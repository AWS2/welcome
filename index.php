<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div align='center'><h1 id="title">Projecte Welcome 1</h1></div>
    <div class="grid-container">
        <?php 
            $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
            $imageCount = 0;

            foreach ($imgs as $img) {    
                if (substr($img, -3) == "jpg" || substr($img, -3) == "png" || substr($img, -4) == "jpeg") {
                    $name = substr($img, 0, -4);
                    echo "<div class='grid-item'>";
                    echo "<a href='profile/$name.html'><br>";
                    echo "<img src='img/$img' width='150' height='150'><br>";
                    echo $name . "</a><br></div>";
                    $imageCount++;

                    if ($imageCount % 4 == 0) {
                        echo "<div class='grid-row'></div>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>


