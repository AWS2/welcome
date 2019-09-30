<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Galeria</title>
<link rel="stylesheet" type="text/css" media="all" href="galeria.css" />
</head>
<body id='body'>

<?php
include 'directorios.php';                      //script donde se encuentran alamacenados los directorios
                                                //con imagenes
$album_dir = $_GET["album"];                    //esta variable es un entero que corresponde al indice
                                                //de un arreglo que existe en el script "directorios.php"
                                                //se hace de esta forma pues agregando valores en ese
                                                //script puedes agregar infinita cantidad de directorios con imagenes
                                                //lo que amplia tu galeria con este mismo script.

$indice = $_GET["album_p"];                     //esta variable indica la pagina de la galeria, cabe señalar que el
                                                //el script automaticamente determinara la cantidad de paginas
                                                //del album en base a la cantidad de imagenes en el directorio
                                                //dejando 15 imagenes por pagina si este valor no se envia por url
                                                //el valor por defecto sera la pagina 1 del album

$direccion = album_get($album_dir);             //con el valor numerico recibido se llama a la funcion "album_get(numero_indice)"
                                                //ubicada en el archivo "drectorios.php" y se obtiene el
                                                //directorio a trabajar

$lista=leer_directorio($direccion);             //esta funcion guarda en un arreglo el nombre de todas las imagenes en
                                                //el directorio (notese que este script no verifica si el directorio contiene
                                                //solo imagenes por tanto el control debera hacerlo el usuario del script, de
                                                //no controlar este hecho esto puede resultar en un error

$paginas=calculo_de_paginas(count($lista));     //en base a la cantidad de imagenes en el directorio esta funcion hace un calculo
                                                //de la cantidad de paginas que se necesitara para mostrar todas las imagenes
                                                //del directorio


echo "<div id='pane1'>";
echo 	"<div id='top'>";
echo 	"</div>";
echo	"<div id='margen'>";
generar($lista, $indice, $direccion, count($lista), $album_dir);

function leer_directorio($direccion){
	$lista[]=array();
	$dir = opendir($direccion);
	while($archivo = readdir($dir)){
    	if(($archivo == ".") || ($archivo == "..")){
		}
    	else{
        	$lista[]=$archivo;
		}
	}
	closedir($dir);
	return $lista;
	//'&album='".$album_dir."'&dir='".$indice."
}
function generar($imas, $indice, $direccion, $elementos, $album_dir){
	$a=0;
    echo "<table>";
        for($a=1+($indice*15);$a<=15+($indice*15);){
            echo "<tr height='160'>";
                for($k=0;$k<5; $k++, $a++){ //ajustando el css y cambiando el numero "5" de este ciclo se puede cambiar
											//la cantidad de fotos por linea
					if($a>=$elementos){
			        	echo "<td></td>";
		            }
					else{
//                    	echo "<td><a href='presentacion.php?imagen='".$imas[$a]."'<img src='".$direccion.$imas[$a]."'/></a><br>".$imas[$a]."</td>"; //el tipico punto ke no ves
						echo "<td><a href='presentacion.php?album=".$album_dir."&dir=".$indice."&a=".$a."'><img border='0' src='".$direccion.$imas[$a]."'/></a><br>".$imas[$a]."</td>";
					}
                }
				if($a>=$elementos){
			        break;
		        }
            echo "</tr>";
        }
    echo "</table>";
}
function calculo_de_paginas($numero){
    $paginas=0;
    while($numero>15){
        $numero=$numero-15;
        $paginas++;
    }
    if($numero>0){
        $paginas++;
    }
    return $paginas;
}
echo	"</div>";
echo	"<div id='footer'>";
			for($a=0; $a<$paginas; $a++){
				if($a==$indice){
					echo "<img src='src/actual.png' />";
					$indice_actual=$a;
				}
				else{
					echo "<a href='galeria.php?album=".$album_dir."&album_p=".$a."'><img src='nactual.png' /></a>";
				}
			}
			echo "<div id='footerpage'>";
				echo "<div id=text>>> pagina ",$indice+1,"</div>";
			echo "<div>";


echo	"</div>";
echo "</div>";

?>
</body>
</html>