
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Seleccionala carpeta de Imagenes</h1>
<FORM action='index.php' method='post'>
<SELECT name="carpeta">

<?php
		$dir = opendir("img");
		$arxiu = readdir($dir);
		
			while( $arxiu!==false )
			{
				if($arxiu!='..' && $arxiu!= '.'){
				echo '<OPTION value="'.$arxiu.'">'.$arxiu.'</option>';
			}
				$arxiu = readdir($dir);
			}
		closedir($dir);
?>
</SELECT>
<INPUT type="submit" value="abrir carpeta"/><br />
<BR />
<?php
if(isset($_POST["carpeta"])){
$ruta = "img/".$_POST["carpeta"]."/"; // Aqui indicamos ruta
 $filehandle = opendir($ruta); // con opendir abrimos las carpeta que hemos seleccionado anteriormente
  while ($file = readdir($filehandle)) {
   if ($file != "." && $file != "..") {
    $tamanyo = GetImageSize($ruta . $file);
            ?>
     <img src="<?php echo $ruta.$file ?>" width="150px"><br>    
            <?php
   } 
  } 

closedir($filehandle); // cerramos archivo
}
?>
</body>
</html>
