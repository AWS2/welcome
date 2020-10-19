<!DOCTYPE html>
<html>
	<head>
		<title>Project Welcome 1</title>
		<style>
			.image {
				float: left;
				width: 100px;
				height: 100px;
				margin: 10px;
				overflow: hidden;
			}
		</style>
	</head>
	<body>
		<h1>Project Welcome 1</h1>

		<?php 
			$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
			foreach( $imgs as $img ) {	
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					$name = substr($img,0,-4);
					echo '
					<a href="profile/'.$name.'.html">
						<div class="image" style="background-image: url(img/'.$img.');"></div>
					</a>
							';
				}
			}
		?>
	</body>
</html>