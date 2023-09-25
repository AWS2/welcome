
<head><link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
  
<div class="header">
    <h1>Projecte Welcome 1</h1>
</div>

	<ul>
        <table>

	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);?>
                <tr>
                <td>
                    <?php echo "<a href='profile/$name.html'><img  src='img/$img' ></a><br/>";
                            echo "<h3>";
                            echo $name."</h3>";?>
                            </td>
                        </tr>
                   <?php }?>
                <?php


            }
        ?>
        </table>
</body>