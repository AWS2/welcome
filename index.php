
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 1</title>

    <style>
        body {
            background: #e0e0e0;
            font-family: 'Arial'
        }
        
        body > h1 {
            text-align:center;
            font-size: 50px;
        }

        .layout {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            list-style: none;
            justify-content:center;
            
        }

        .profile {
            width:300px;
            height:300px;
            text-align:center;
            border-radius: 5px;
            background: #fff;
            border: 1px solid #6b6b6b;
            font-size:20px;
            box-shadow: 3px 3px 3px #6b6b6b;
        }

        .profile a {
            text-decoration:none;
            color: #000;
            font-weight: bold;
        }

        .profile img {
            width:100%;
            height:75%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
    </style>
</head>
<body>
	<h1>Projecte Welcome 1</h1>
	<ul class="layout">
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
            echo "<li><div class='profile'><a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "</div></li>";
            
        }
    ?>
    </ul>
</body>
</html>