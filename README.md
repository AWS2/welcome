# GolosonesTeam

## Componentes del grupo

* **Kevin** "La Flama"
* **Xus** "El Diamante"

## Folders and filenames

![https://moodle.esteveterradas.cat/](logoesteve.jpg "Esteve Terradas" )

## Code and Syntax Highlighting

**Code PHP:**
```
<?php 
	$imgs = scandir("./img",SCANDIR_SORT_DESCENDING);
	foreach( $imgs as $img ) {	
		if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
			$name = substr($img,0,-4);
			echo "<a href='profile/$name.html'>";
			echo "<img src='img/$img' width='160' height='160'  title='$name' class='zoom'";
			;
		}
	}
?>
```
**Code CSS:**
```
img:hover{
-webkit-transform: rotateY(180deg);
-webkit-transform-style: preserve-3d;
transform: rotateY(180deg);
transform-style: preserve-3d;}
}
```
**Crea el efecto de rotacion en las imagenes de 180º.**