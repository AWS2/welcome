
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome 1 - Jorge Cortes</title>

    <style>
        body {
            background-color: #EAEAEA; 
            font-family: 'Arial';
        }

        h1 {
            text-align: center;
            font-size: 50px;
            color: #2C3E50;
        }

        a {
            text-decoration: none; 
            color: white;
        }

        #marcoPrincipal {
            width: 75%;
            background-color: #4A607A; 
            margin: 0 auto;
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            border-radius: 25px;
        }

        .alumno {
            display: flex;
            flex-direction: column;
            background-color: #F7F5EB;
            width: 27%;
            height: 250px;
            margin: 30px;
            border-radius: 15px;
        }

        .img {
            width: 130px;
            height: 160px;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 5px;
        }

        .link {
            background-color: #2C3E50; 
            width: 70%;
            height: 40px;
            margin: 0 auto;
            margin-top: 20px;
            border-radius: 10px;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            transition: background-color 0.3s ease; 
        }

        .link:hover {
            background-color: #E74C3C; 
            
        }

    </style>

</head>
<body>
        <h1>Projecte Welcome 1</h1>
        <div id = "marcoPrincipal">
           
            <?php
            $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
            foreach( $imgs as $img ) {
                if( $img=="." || $img==".." )
                    continue;
                if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                    $name = substr($img,0,-4);
                }else if (substr($img,-4)=="jpeg") {
                    $name = substr($img,0,-5);
                }

                echo "<div class = 'alumno'>";
                    
                    echo "<img class = 'img' src='img/$img' alt = 'Imagen de perfil del alumno.'>";
                    
                    echo "<a href='profile/$name.html'> <div class = 'link'>$name </div></a>";
                    
                echo "</div>";
            }
            ?>
        </div>
</body>
</html>

