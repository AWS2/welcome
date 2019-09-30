
<?php

function album_get($indice){


//Para agregar mas directorios solo aumentar el
//indice del arreglo y agregar el directorio

$album_dir[0]="img/";
$album_dir[1]="";
$album_dir[2]="";  //Agregar directorios entre las "";
$album_dir[3]="";
$album_dir[4]="";
$album_dir[5]="";
$album_dir[6]="";
$album_dir[7]="";
$album_dir[8]="";
$album_dir[10]="";

//Fin de la lista de directorios de imagenes




return $album_dir[$indice];
}
?>