<body>
	<h1>Projecte Welcome 1</h1>
    <section>
	<?php 
            
        $htmls = scandir("./profile",SCANDIR_SORT_ASCENDING);
        foreach( $htmls as $html ) {
            if( $html=="." || $html==".." )
                continue;
            if( substr($html,-4)=="html"){
                $name = substr($html,0,-5);
            }
            echo "<article>\n         ";
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>\n      ";
            echo "</article>\n          ";
        }
    ?>
    </section>

</body>

