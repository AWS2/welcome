<style>
    <?php include 'styles.css'; ?>
</style>
<div class="header">
    <h1>El fabuloso mundo de AWS2</h1>
</div>
<img src="img/rana.gif" width="80" style="position: absolute; top: 0; left: 0; margin: 0 0 0 20px;" />
<img src="img/rana.gif" width="80" style="position: absolute; top: 0; left: 0; margin: 0 0 0 20px;" />


<ul>
<table>
    <?php
        $imgs = scandir("./img",SCANDIR_SORT_DESCENDING);
        foreach( $imgs as $img ) {

                if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
                    $name = substr($img,0,-4);?>
                    <tr>
                        <td>
                            <?php echo "<a href='profile/$name.html'><img  src='img/$img' width='130'></a><br/>";
                                  echo "<h3>";
                                  echo $name."</h3>";?>
                        </td>
                    </tr>
               <?php }?>
            <?php


        }
    ?>
</table>

</ul>
