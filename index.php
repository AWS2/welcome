<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Welcome JeanPau</h1>
    <table>
    <tr>
    <?php
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        $cont = 1;
        foreach( $imgs as $img ) {
            if( $cont % 4 == 1) {
                echo "</tr><tr>";
            }
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<td><div class='profile'><img src='img/$img' width='130'>";
            echo "<button onclick='window.location.href = \"profile/$name.html\"'>";
            echo $name."</button></div></td>";
            $cont +=1;
        }
    ?>
    </tr>
    </table>

</body>