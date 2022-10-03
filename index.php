<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        table{
            width: 70%;
            margin: 0 auto; 
            border-spacing: 10px;
            border: solid black;
        }
        td{
            border: solid black;
            text-align: center;
        }
    </style>
</head>
<body>
	<h1>Projecte Welcome 1</h1>
    <table>
	<?php 
        $profiles = scandir("./profile",SCANDIR_SORT_ASCENDING);
        $imgExtensions = array("jpg", "jpeg", "png");
        $image = "";
        foreach( $profiles as $profile ) {
            $name = substr($profile,0,-5);
            $image = "userDefault.png";
            if( $profile=="." || $profile==".." )
                continue;
            if(substr($profile,-5) == ".html"){
                echo "<tr>\n";
                foreach($imgExtensions as $extension){
                    if(file_exists("img/".$name.".".$extension)){
                        $image = $name.".".$extension;
                    }
                }
                echo "<td><img src='img/$image' alt='Foto de $name' width='130'></td>\n";
                echo "<td><a href='profile/$name.html'>$name</td>\n";
                echo "</tr>\n";
            }           
        }
    ?>
    </table>
</body>

</html>
