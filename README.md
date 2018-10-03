### Miembros del grupo:
*Jordi Martínez Mateos*
*Jose Soto Moriano*

### Web del centro
[Aquesta es la nostra pagina del centre: ](http://www.esteveterradas.cat/)

### Aqui esta nuestro logo:

__Logo__:
![alt text](et.jpg)

### Aqui esta un trozo de nuestro codigo php:

<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				echo "<div id='contenedor'>";
					echo "<div id='contenedor-imagen'>";
							echo "<a href='profile/$name.html'>";
							echo "<img style='float:left' src='img/$img' width='130'>";
					echo "</div>";
				echo "</div>";
				echo "</div>";
				;
			}
		}

	?>

### El nostre codi css, que fa que roti les imatges:

#contenedor-imagen img {
	margin: 70px;
	width: 210px;
	height: 210px;
	border: 5px solid #eee;
	-webkit-animation: rotate 10s infinite ease-in-out;
	-moz-animation: rotate 10s infinite ease-in-out;
	-o-animation: rotate 10s infinite ease-in-out;
	-ms-animation: rotate 10s infinite ease-in-out;
}
@-webkit-keyframes rotate{
	0%{-webkit-transform:rotateZ(-360deg);
	}
	100%{-webkit-transform:rotateZ(0deg);
	}
}

@-moz-keyframes rotate{
	0%{-moz-transform:rotateZ(-360deg);
	}
	100%{-moz-transform:rotateZ(0deg);
	}
}

@-o-keyframes rotate{
	0%{-o-transform:rotateZ(-360deg);
	}
	100%{-o-transform:rotateZ(0deg);
	}
}

@-ms-keyframes rotate{
	0%{-ms-transform:rotateZ(-360deg);
	}
	100%{-ms-transform:rotateZ(0deg);
	}
}


### cursiva:
*hola* o _hola_

### negreta:
**hola** o __hola__

### llistes:
1. Llista ordenada
···Llista desordenada···

···Amb els tres punts es fa la llista desordenada, amb el 1., 2. etc, es fa ordenadament···
