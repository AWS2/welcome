# welcome

## Componentes del grupo

-***Marcos Arteaga***
-***Miguel Arteaga***

# Centro

```
```
![Texto alternativo](logo.jpg)
```
```
[Esteve Terradas](http://www.iesesteveterradas.cat/)

```
```
1. Elemento de lista 1
2.  Elemento de lista 2
    - Elemento de lista 3
    - Elemento de lista 4
        1. Elemento de lista 5
        2. Elemento de lista 6
```
```
```
<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);

				echo "<div id='ex4'>";
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img' width='300' height='300'>";
				echo "<p>";
				echo $name."</a>\n";
				echo "</p>";
				echo "</div>";

			}
		}
	?>

Con este codigo de php hacemos un bucle con el cual printamos  las imagenes y los nombres y tambien creamos los links de perfil de cada foto.


```
```
```
img {
	margin: 20px;
	border: 5px solid  #ffffff ;
	-webkit-box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
	-moz-box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
	box-shadow: 4px 4px 4px rgba(0,0,0,0.2);
	-webkit-transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
}
img:hover {
	-webkit-transform: rotate(-7deg);
	-moz-transform: rotate(-7deg);
	-ms-transform: rotate(-7deg);
	transform: rotate(-7deg);
}

Con este codigo de css damos efectos a las imagenes de nuestra pagina. 