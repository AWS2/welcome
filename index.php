<html>
	<head></head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<body>
		<h1>Projecte Welcome 1</h1>
		<ul>
		<div>
		<?php 
			$people = [];

			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {	
				
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					$name = substr($img,0,-4);
					$person = array("name" => $name,"image" => $img);
					$people[] = $person;
				}
			}
			foreach($people as $value){
				?><img src="img/<?=$value["image"]?>" height="300" width="200" alt=""><?
			}
		?>
		</div>

	</body>
</html>