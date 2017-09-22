<style>
    <?php include 'styles.css'; ?>
</style>
<div class="header">
    <h1>El fabuloso mundo de AWS2</h1>
</div>


<ul>

<?php
	$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
	foreach( $imgs as $img ) {
		
		if( substr($img,-3)=="jpg" or substr($img,-3)=="png") {
			$name = substr($img,0,-4);
            echo "<img src='img/$img' width='130'><br/>";
            echo "<a href='profile/$name.html'>";
			echo $name."</a>";
			echo "<br /><br />";
		}

		elseif (substr($img,-4)=="jpeg"){
            $name = substr($img,0,-5);
            echo "<img src='img/$img' width='130'><br/>";
            echo "<a href='profile/$name.html'>";
            echo $name."</a>";
            echo "<br /><br />";
        }


	}
?>

</ul>
