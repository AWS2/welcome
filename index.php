<html>
	<head></head>
	<link rel="stylesheet" href="index.css">
	<body>
		<div id="main">
			<h1>Ruben OverFlow</h1>
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
						?><img src="img/<?=$value["image"]?>" height="300" width="200" alt=""><?
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
			
		</br>
		</div>
			<div id=pie>
				<img src="derecha.png" onclick="atras()" id="espejo"class="boton">
				<img src="derecha.png" onclick="adelante()"  class="boton">
			</div>
		</div>
		<div id="sliderImages">
			<img id="si_1" src="nedstark.png" alt="" />
			</div>
			<script>
				var num=1;
				function adelante() {
					if(num<12){
						document.getElementById(num).style.display = "none";
						num++;
						document.getElementById(num).style.display = "inline";
					}else if (num==12) {
						document.getElementById(num).style.display = "none";
						num = 1;
						document.getElementById(num).style.display = "inline";
					}
				}
				function atras() {
					if(num==1){
						document.getElementById(num).style.display = "none";
						num=12;
						document.getElementById(num).style.display = "inline";
					}else if (num>1) {
						document.getElementById(num).style.display = "none";
						num--;
						document.getElementById(num).style.display = "inline";
					}
				}
			</script>
	</body>
</html>