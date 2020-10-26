<!DOCTYPE html>
<html>
	<head>
		<title>Project Welcome 1</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<center><h1>Project Welcome 1</h1></center>

		<div id="box-initial">
			<?php 

				$valid_ext = ["jpg", "png", "jpeg"];
				$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
				foreach( $imgs as $img ) {	
					$a = explode(".", $img);
					
					if(sizeof($a) >= 2){
						$extension = $a[sizeof($a)-1];
						
						if(in_array($extension, $valid_ext)){
							
							unset($a[sizeof($a)-1]);
							$name = "";
							foreach($a as $b){
								$name .= $b;
							}

							if(file_exists(str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']) . "profile/$name.html")){
								echo '
							<a href="profile/'.$name.'.html">
								<div class="image" style="background-image: url(img/'.$img.');">
									<div id="username" title="'.$name.'">'.$name.'</div>
								</div>
							</a>
									';
							}
							
							
						}
					}
	
				}
			?>
		</div>
	</body>
</html>
