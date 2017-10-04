
<head>
	<link href="CSSGit.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>El fabuloso mundo de AWS2</h1>

	<?php 

		$imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
		foreach( $imgs as $img ) {	
			if( substr($img,-3)=="jpg" or substr($img,-3)=="png" or substr($img,-4)=="jpeg") {
				$name = substr($img,0,-4);
				echo "<a href='profile/$name.html'>";
				echo "<img src='img/$img' width='130'>";
				echo $name."</a>";
				echo "<div></div>";
				;
			}
		}
 
 		if(isset($_COOKIE['AboutVisit'])){ 
 			
 			$last = $_COOKIE['AboutVisit']; } 
 			$year = 31536000 + time() ; 
 			//this adds one year to the current time, for the cookie expiration 
 			setcookie(AboutVisit, time (), $year) ; 
 		
 		if (isset ($last)){ 
 			
 			$change = time () - $last; 
 			
 			if($change > 86400){ 
			
				echo "Welcome back! <br> You last visited on ". date("m/d/y",$last) ; 
				// Tells the user when they last visited if it was over a day ago
			} 
 			
 			else{ 
 			
 				echo "Hey! Forgot something?!"; 
 				//Gives the user a message if they are visiting again in the same day 
 			} 
		}
		else{ 
 			echo "Welcome to our site!"; 
 			//Greets a first time user 
 		} 
 	?>
</body>