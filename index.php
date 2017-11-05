<style>
    <?php include 'estilo.css'; ?>
</style>
<div class="header">
    <h1>Concurso de estilo de Manuel_Red Hat</h1>
</div>

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