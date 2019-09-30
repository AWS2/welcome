<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeria</title>
<link rel="stylesheet" type="text/css" media="all" href="presentacion.css" />
</head>
<body id="body">

<?php
include 'directorios.php';
//$imagen = $_GET['imagen'];
$album_dir = $_GET['album'];
$indice = $_GET['dir'];
$a = $_GET['a'];


generar($a, $album_dir, $indice);

function generar($a, $album_dir, $indice){

$direccion = album_get($album_dir);
$lista=leer_directorio($direccion);
echo "<div id='contenedor'>";	
echo 	"<div id='imagen'>";
$size = GetImageSize($direccion.$lista[$a]);
$largo=$size[0];
$alto=$size[1];
	if($largo>950 && $alto>520){
		$difx=$largo-950;
		$dify=$alto-520;
		if($difx<$dify){
			$x=($largo*520)/$alto;
			if($x>950){
				echo "&nbsp;<img src='".$direccion.$lista[$a]."' width='950'>";
			}
			else{
				echo "&nbsp;<img src='".$direccion.$lista[$a]."' height='520'>";
			}			
		}
		if($difx>$dify){
			$y=($alto*950)/$largo;
			if($y>520){
				echo "&nbsp;<img src='".$direccion.$lista[$a]."' width='520'>";
			}
			else{
				echo "&nbsp;<img src='".$direccion.$lista[$a]."' width='950'>";
			}
		}
		if($difx==$dify){
			echo "&nbsp;<img src='".$direccion.$lista[$a]."' width='950' height='520'>";
		}
	}
	if($largo>1000 && $alto<520){
		echo "&nbsp;<img src='".$direccion.$lista[$a]."' width='950'>";
	}
	if($largo<1000 && $alto>520){
		echo "&nbsp;<img src='".$direccion.$lista[$a]."' height='520'>";
	}
	if($largo<1000 && $alto<520){
		echo "&nbsp;<img src='".$direccion.$lista[$a]."'>";
	}

	
echo 	"</div>";
echo 	"<div id='footer'>";
echo		"<div id='util'>";
echo			"<div id='util_l'>";
					if($a!=1){
						echo "<a href='presentacion.php?album=".$album_dir."&dir=".$indice."&a=".($a-1)."'><img src='src/left.png' /></a>";
					}
					else{
						echo "<img src='src/left.png' />";
					}
echo			"</div>";
echo			"<div id='util_c'>";
echo				$lista[$a];
echo			"</div>";
echo			"<div id='util_r'>";

					if($a!=(count($lista)-1)){
						echo "<a href='presentacion.php?album=".$album_dir."&dir=".$indice."&a=".($a+1)."'><img src='src/right.png' /></a>";
					}
					else{
						echo "<img src='src/right.png' />";
					}
echo			"</div>";
echo		"</div>";
echo    	"<div id='util_volver'>";
echo		"<a href='galeria.php?album=".$album_dir."&album_p=".$indice."'>Volver</a>";
echo 		"</div>";
echo 	"</div>";

echo "</div>";
}

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
}

/*

function generar($imas, $indice, $direccion, $elementos){
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
                    	echo "<td><img src='",$direccion,$imas[$a],"'/><br>",$imas[$a],"</td>";
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
					echo "<img src='../src/actual.png' />";
					$indice_actual=$a;
				}
				else{
					echo "<a href='http://190.161.242.154/TallerLavanda/contenidos/galeria.php?album=".$album_dir."&album_p=".$a."'><img src='../src/nactual.png' /></a>";
				}
			}
			echo "<div id='footerpage'>";
				echo "<div id=text>>> pagina ",$indice+1,"</div>";
			echo "<div>";
			

echo	"</div>";
echo "</div>";
*/
?>
</body>
</html>
