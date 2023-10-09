<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Diego Pares" >
    <title>Welcome!</title>
    <style>
        li{
            list-style-type:none;
        }
        h1{
            text-align: center;
            background-color:rgba(0,0,0,0.15);
            border-radius:20%;
            width:fit-content;
            margin: 0 auto;
            padding-left:20px;
            padding-right:20px;
        }
        body{
            background-color: azure;
        }
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
            
        }
        div .container {
            margin-top: 30px;
            display:flex;
            width: calc((80vw/3) - 30px);
            height: 250px;
            background-color: rgba(0,255,255,0.3);
            box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
            vertical-align:bottom;
            justify-content: space-around;
            border-radius:5%;
        }
        img {
            height:calc((80vh/3) - 30px);
            width :calc((80vw/3) - 30px);
            vertical-align: bottom;
            border-radius:5%;
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
            echo "<li>";
            echo "<div class='container'>";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' alt='img alumnes'>";
            echo $name."</a>";
            echo "</div>";
            echo "</li>";
        }
    ?>
    </ul>
</div>
</body>
</html>

