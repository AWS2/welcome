# welcome to the Rubens branch

## First GIT project AWS2 M8

Aquí explicamos nuestro código: [Link](#codi)

* **Rubén del Olmo**
* **Rubén García**


![alt text][logo]

[logo]: https://pbs.twimg.com/profile_images/478903857653620737/aNqCiRN7_400x400.jpeg "Logo del Esteve Terrades"



 Somos estudiantes de el instituto Esteve Terradas i Illa*. 
Su web [web][http://www.iesesteveterradas.cat/] és:

(http://www.iesesteveterradas.cat/)

*** 

## Codi

Este código es un conjunto de dos bucles for, el primero crearía un array con las imágenes y los nombres a quienes pertenecen estas imágenes. El segundo bucle se encargaría de crear los diferentes contenedores div, en los cuáles se incluirán cuatro imágenes cada uno.

```php 

<?php 
		$people = [];
		$x = 0;
		$count = 1;
		$sem = False;
		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		$display = 'display:inline';
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				$person = array("name" => $name,"image" => $img);
				$people[] = $person;
			}
		}
		?><?
		foreach($people as $value){
			if($sem == False){
				?><div id="<?=$count?>" class="interior" style="<?=$display?>";><?
			}
			if($x < 4){
				?><a href="profile/<?=$value["name"]?>.html"><img src="img/<?=$value["image"]?>" height="300" width="200" alt=""></a><?
				$x++;
				$sem = True;
			}else{
				$display = 'display:none';
				$count++;
				$x = 0;
				$sem = False;
				?></div><?
			}
		}
	?>


```

En este trozo de código podemos ver cómo se pone el fondo de la página y el tamaño de las imágenes.

```css

body{
    background-image: url(nieve.gif);
    background-repeat: no-repeat;
    background-size: cover;
}
h1{
    margin-left: 300px;
}
img{
    height: 200px;
    width: 200px;
    margin: 10px;
    border-radius: 5px;
}

```
