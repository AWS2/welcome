<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Erik Tamaño">
    <title>Welcome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <style>
        h1 {
            width: 100%;
            text-align: center;
        }
        li {
            width: 30%;
            margin-right: 3%;
            display: inline-block;
        }

        .card {
            border: solid 1px darkgray;
            border-radius: 10px;
            box-shadow: 4px 4px 2px 1px rgba(0, 0, 0, .2);
            margin-bottom: 20px;
            transition: transform 1s, z-index 1s;
            z-index: 10;
            position: relative;
            background-color: rgba(200, 200, 200, 0.2);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .card:hover {
            transform: scale(1.4);
            z-index: 100000;
        }

        .img-container {
            width: 100%;
            height: 20vw;
            overflow: hidden;
            padding: 12px;
        }

        img {
            width: calc(100% - 24px);
            display: inline-block;
            border-radius: 5px 5px 0 0;
        }

        a {
            text-decoration: none;
            color: black;
        }

        span {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Alfa Slab One', cursive;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <main>
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
                echo "<li><div class='card'><a href='profile/$name.html'>";
                echo "<div class='img-container'><img src='img/$img' width='130'></div><span>";
                echo $name . "</span></a>";
                echo "</div></li>";

            }
            ?>
        </ul>
    </main>
</body>

</html>