
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Prueba</h1>
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
<BR />
<INPUT type="submit" value="abrir carpeta" />
<?php
	if(isset($_POST["carpeta"])){
			$carpeta = $_POST["carpeta"];
			$final = "img/".$carpeta."/";
			$images = glob($carpeta."*.jpg");
				foreach($images as $image) {
					echo '<img src="'.$image.'" /><br />';
				}

			}
?>
</body>
</html>
