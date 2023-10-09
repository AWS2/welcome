<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author="Claudia Moyano, 2n DAW">
        <meta correu="cmoyanoherrerias.cf@iesesteveterradas.cat">
        <title>ALUMNAT</title>
        <link rel="shortcut icon" href="">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Borel&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap');

            body {
                background-image: url("https://i.pinimg.com/originals/f1/b1/02/f1b1024a385af97ede3ff38619bd600a.jpg");
                background-attachment: fixed;
                background-size: cover;
                padding: 0px;
                width: auto;
                height: auto;
            }

            .container {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }

            .lista {
                width: calc(32% - 20px);
                padding: 10px;
                margin-bottom: 40px;
                background-color: rgba(255, 255, 255, 0.5);
                border: 1px solid rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                transition: transform 0.3s ease;
            }

            .lista:hover {
                    transform: scale(1.1);
                    border-radius: 8px;
                    box-shadow: 0 8px 8px 0 rgba(255, 255, 255, 0.2);
            }

            li {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            h1 {
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: rgba(255, 255, 255, 0.6);
                color: #DB1C71;
                font-family: 'Borel', cursive;
            }

            img {
                margin: 20px 20px;
                width: 100px;
                height: 100px;
                border-radius: 50%;
            }

            a {
                text-decoration: none;
                color: #DB1C71;
                font-family: 'Borel', cursive;
                text-weight: lighter;
            }

            .name1 {
                margin-bottom: 44px;
            }
        </style>
    </head>
    <body>
        <h1>Projecte · Welcome I</h1>
        <div class="container">
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

                echo "<div class='lista'>";
                echo "<li class='item-5 deeper parent' style='list-style-type: none;'>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' width='130'><br />";
                echo "<p class='name1'>" .$name. "</p></a>";
                echo "<div></div>";
                echo "</li>";
                echo "</div>";
            }
            ?>
        </div>
    </body>
</html>