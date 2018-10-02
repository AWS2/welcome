# welcome to the TeamGofre's branch

## First GIT project AWS2 M8

Aquesta branca está creada per Josep Sort i Yaiza Cortés, membres de AWS2.

Som estudiants de l'Institut Esteve Terradas i Illa. 
La seva web és:

(http://www.iesesteveterradas.cat/)


[logo]: http://wefiles.europeinyourlife.com/71/imagen_fichas/FICHA_14997/logo.jpg "Logo del Esteve Terrades"


## Codi

Aquest codi de PHP de la nostra pàgina Welcome és un bucle foreach per fer un div per cada imatge on mostrarem per cadascuna la imatge i el seu títol, que será el nom que té la foto i aquest títol i la imatge serán un hyperlink que redirigeix a la pàgina de perfil de l'usuari que has clicat:

''' php 

<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		echo "<div class = 'container'>\n";
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div class = 'item'>\n";
				echo "<a href='profile/$name.html'>\n";
				echo "<img src='img/$img' width='130' height='130'>\n";
				echo "<br>";
				echo $name."</a>\n";
				

				echo "</div>\n\n";

				;
			}
		}
						echo "</div>\n\n";
	?>


'''

Aquest tros de codi CSS posa un efecte amb hover per fer la imatge més gran i crear un efecte de zoom:

''' css

.container img:hover {
	width: 170px;
	height: 170px;
}


'''