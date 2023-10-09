<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte Welcome</title>
    <style>

        body {
            background-color: #d3d3d3;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
       
        }

        ul {
            list-style: none;
            
        }

        a {
            text-align: center;
        }

        .profile {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 400px;
            height: auto;
            max-width: 400px;
            border: 2px solid black;
            margin: 20px;
            
        }

        img {
            width: 200px;
            height: 200px;
        }

        h1 {
            text-align: center;
        }

        

    

        
        
    </style>
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <div class="container">
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
                echo "<div class='profile'>";
                echo "<ul>";
                    echo "<li><a href='profile/$name.html' id='$name'>";
                    echo "<li><img src='img/$img' alt='$name' width='130'></li>";
                    echo $name."</a></li>";
                echo "</ul>";
                echo "</div>";
            
        }
        ?>  
    </div>

</body>
</html>


        
