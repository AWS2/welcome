<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <style>
        
        ul{
            display:flex;
            flex-direction:row;
            width:fit-content;
            height: calc((80vw/3) - 30px);
            flex-wrap: wrap;
            padding:0;
            justify-content: space-around;
            border:0;
        }
        div a{
            width: fit-content;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            
        }
        div .container {
            display:flex;
            flex-direction:column;
            width: calc((80vw/3) - 30px);
            height: calc(80vw/3 - 30px);
            background-color: azure;
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            vertical-align:bottom;
            justify-content: space-around;

        }
        img {
            max-height:calc((80vh/3) - 30px);
            width :calc((80vw/3) - 30px);
            vertical-align: bottom;
        }
    </style>
</head>
<body>
        <h1>Projecte Welcome 1</h1>
        <div class="containers">
        <ul>

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
            echo "<div class='container'>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img'>";
            echo $name."</a>";
            echo "</div>";

        }
    ?>
    </ul>
</div>
</body>
</html>

