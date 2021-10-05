<body>
        <h1><center>Equipo TeamSAJA</center></h1>
        <ul>

        <?php 

                $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
                foreach( $imgs as $img ) {
                        if(substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
                                $name = substr($img,0,-4);
                                $nameLowerCase = strtolower($name);
                                if ($nameLowerCase ==  "joseparedes" || $nameLowerCase == "adriangofe" || $nameLowerCase == "samuelmillan") {
                                        echo "<a href='profile/$name.html'>";
                                        echo "<center><img src='img/$img' width='130'></center>";
                                        echo $name."</a>";
                                }
                                echo "<div></div>";
                                ;
                        }
                }

        ?>

</body> 
