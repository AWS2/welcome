
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

			div.main > h1 {
				text-align: center;
				color: white;
				font-family: 'Roboto', sans-serif; 
			}

			body {
				background-image: url("background.jpg");
				background-attachment: fixed;
				background-size: cover;
				background-repeat: no-repeat;
			}

			div.todo {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}

			div.main {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 10vh;
				margin-bottom: 8vh;
				background-color: #4F3325;
			}

			div.todo ol {
				list-style: none;
			}

			div.todo > ol > li > a{
				text-decoration: none;
				color: white;
				font-family: 'Roboto', sans-serif;
				font-size: 3vw;
				-webkit-text-stroke: 2px black;
			}


	</style>
</head>
<body>
	<div class="main"><h1>Projecte Welcome</h1></div>
	<div class="todo">
		<?php 
			$imgs = array_map('ucwords',scandir("./img"));
			sort($imgs);
			$anteriorletra = null;
			echo "<ol>\n";
			for ( $i = 0; $i < sizeof($imgs); $i++ ) {
				$img = $imgs[$i];	
				if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
					if ($anteriorletra != $img[0]) {
						echo "<li><a href='#'>$img[0]</a>\n";
						echo"<ol>";
						$anteriorletra = $img[0];
					}
					$name = substr($img,0,-4);
					echo "<li><a href='profile/$name.html'>";
					echo "<img src='img/$img' width='130'>";
					echo $name."</a></li>";

					if ($i+1 == sizeof($imgs)  || $imgs[$i][0] != $imgs[$i+1][0]) {
						echo "</ol>\n</li>";
					}
				}
			}
			echo "</ol>";
		?>
	</div>





</body>

</html>
