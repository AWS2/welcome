<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indice Adria Hernandez</title>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
</head>
<body>
        <h1>Projecte Welcome 1</h1>
        
            
                <?php
                $contador=0;
                echo "<table>";
                    $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
                    foreach( $imgs as $img ) {
               
                        if( $img=="." || $img==".." )
                            continue;
                        if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                            $name = substr($img,0,-4);
                        }else if (substr($img,-4)=="jpeg") {
                            $name = substr($img,0,-5);
                        }


                       
                       

                      if ($contador==0){
                        echo "<tr>";

                      }
                      if ($contador==2){
                        echo "</tr>";
                        $contador=0;

                        }
                        
                            echo "<td>";    
                                echo "<a href='profile/$name.html'>";
                                echo "<img src='img/$img' width='130' alt='imagen'>";
                            echo "</td>";   
                            echo "<td>"; 
                                echo $name."</a>";
                                echo "<div></div>";
                                echo "</td>";

                            $contador++;
                            
                        

                    }
                    echo "</table>";
                ?>
            
        </table>
</body>
</html>