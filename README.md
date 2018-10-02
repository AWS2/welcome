# welcome

## Componentes del grupo

- Cristian
- Nil

## Enlace ET
[Esteve terradas i l'Illa](http://www.iesesteveterradas.cat/)
## Logo ET
![Logo ET](/var/www/html/welcome/resources/etimg.jpeg "Logo ET")
## Codigo

El siguiente codigo es un fracmento del css:

'''.imagenes{
  display: flex;
  flex-wrap:wrap;
  padding-left: 2%;
  border-radius: 2%;
}'''

El segundo div contiene una clase llamada imagenes, la cual contiene estas líneas de código en nuestro CSS.

### Display:flex; 
Permite mantener su forma del contenedor.
### Flex-wrap:wrap; 
La propiedad flex-wrap especifica si los artículos flexibles deben ajustarse o no.
### padding-left:2%;
El relleno de un elemento es el espacio entre su contenido y su borde.
### border-radius:2%;
La propiedad border-radius define el radio de las esquinas del elemento. 

El siguiente codigo es una porcion del php:

'''if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<div class='Img'>\n";
				echo "<br><a href='profile/$name.html' target='_blank'>\n";
				echo "<img src='img/$img' >\n";//width='130'
				echo "<br>".$name."</a>\n";
				echo "</div>\n";
				
			}'''
### 1r Linia:
Es un if que mira que sean imagenes, mira si el final del archivo es un png,jpeg,jpg.
### 2n Linia:
Recorta el nombre del archivo para recojer todo menos la extencion.
### 3r a 7a Linia:
Generar la estructura con las variables en su posicion adecuada.