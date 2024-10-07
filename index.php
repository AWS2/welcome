<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Projecte Welcome 1</title>
    <link rel="stylesheet" type="text/css" href="templates/style.css">
</head>
<body>
    <div class="title">
        <h1>WELCOME</h1>
    </div>

    <div class="container">
        <table class="custom-table">
            <tr>
            <?php
                $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
                $counter = 0; 

                foreach ($imgs as $img) {
                    if (substr($img, -3) == "jpg" || substr($img, -3) == "png" || substr($img, -4) == "jpeg") {
                        $name = substr($img, 0, -4);
                        if ($counter % 3 == 0 && $counter != 0) { 
                            echo "</tr><tr>";
                        }
                        echo "
                            <td class='custom-cell'>
                                <img src='img/$img' alt='$name' class='image'>
                                <p class='image-name'>$name</p>
                                <a href='profile/$name.html' target='_blank' class='custom-button'>View Profile</a>
                            </td>
                        ";
                        $counter++;
                    }
                }
            ?>
            </tr>
        </table>
    </div>

</body>
<footer>
    <p>Style created by: Gerard Sanchez</p>
</footer>
</html>
