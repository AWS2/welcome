<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INDEX</title>
        <style>
            h1 {
                text-align:center;
                color:#ffffff;
                width: 100%;
            }
            body {
                background-color:#000;
            }
            li{
                width: 30%;
                margin-right: 3%;
                display: inline-block;
            }
            
            a {
                text-decoration: none;
                align-items: center;
            }
            
            img {
                width: calc(50% - 10px);
                padding-left: 100px;
                display: inline-block;
                border-radius: 5px 5px 0 0;
                padding-top:10px
            }
            
            span {
                width: 100%;
                display: flex;
                justify-content: left;
                margin-top: 10px;
                margin-bottom: 10px;
                padding-left: 150px;
                padding-bottom: 10px;
                font-size: 18px;
            }
            
            ul{
                align-items: center;
                border: solid 2px #000;
                border-radius: 20px;
                background-color:#f5f5dc;
            }

            div {
                background-color:#f5f5dc;
            }
            .flexbox-container {
                display: -ms-flex;
                display: -webkit-flex;
                display: flex;
            }
            .flexbox-container > div {
                    width: 50%;
            }

            .flexbox-container > div:first-child {
                    margin-right: 20px;
            }

        </style>
    </head>
    <body>
        <h1>Projecte Welcome 1</h1>
        <div class="flexbox-container">
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
                        echo "<li><a href='profile/$name.html'>";
                        echo "<img src='img/$img' width='130'><br><span>";
                        echo "".$name."</a></li>";
                    }
                ?>
            </ul>
        </div>
    </body>
</html>