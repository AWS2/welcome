<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <h1>Projecte Welcome 1</h1>
    <table>
    <tr>
    <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        $cont = 1;
        foreach( $imgs as $img ) {
            if( $cont % 3 == 1) {
                echo "</tr><tr>";
            }
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<td><a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a></td>";
            $cont +=1;
        }
    ?>
    </tr>
    </table>

</body>
