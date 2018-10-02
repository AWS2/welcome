# Projecte welcome

## Membres del grup 
-David Encina
-Eric Pérez

## Folders and filenames
<a href="http://www.iesesteveterradas.cat/"><img src="https://pbs.twimg.com/profile_images/478903857653620737/aNqCiRN7_400x400.jpeg" alt="My cool logo"/></a>

## Codis
### Codi CSS:

    img{
    	-webkit-transition:all .9s ease;
    	-moz-transition: all .9s ease;
    	width:100%;
    
    }
    
    img:hover{
    	-webkit-transform:scale(1.25);	
    	-moz-transform:scale(1.25);
    	transform: scale(1.25);

*Aquest es el codi CSS que hem utilitzat per a fer que les imatges s'amplien. L'escala augmenta un 25% al possar el ratolí sobre la imatge.*

### Codi PHP:

 

          <?php 
           
       		<?php 
       		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
       		foreach( $imgs as $img ) {	
       			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
       
       				echo "<div>";
       				echo "<a href='profile/$name.html'>\n";
       				echo "<br>";
       				echo "<img src='img/$img' alt='Avatar' class='Images' title='$name'>\n";
       				echo "<br>";
       				echo "<h6>".$name."</h6>";
       				echo "</div>";
       
       				}
       			}
       ?>

*A través d'un bucle for dintre una capçalera PHP, agafarem les imatges i les afegirem a la pàgina en ordre alfabètic*


