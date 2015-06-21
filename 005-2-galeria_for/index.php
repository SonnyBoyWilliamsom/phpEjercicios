<?php 
$pictures=array(array("nombreFoto"=>"river.jpg","picTitle"=>"River"),
                array("nombreFoto"=>"singapore.jpg","picTitle"=>"Singapore"),
                array("nombreFoto"=>"windows.jpg","picTitle"=>"Windows")
                );
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
       
    </head>
    <body>
        <h1>Galería de fotografía</h1>
        
        <section id="galeria">
            
            <?php 
            for($i=0;$i<count($pictures);$i++){
               
            ?>
            <a href="watch.php?nombreFoto=<?=$pictures[$i]["nombreFoto"]?>&title=<?=$pictures[$i]["picTitle"]?>">
                <img src="img/<?=$pictures[$i]["nombreFoto"]?>" alt="">
            </a>
            <?php
            }
            ?>
           
        </section>
            
            <?php
        // put your code here
        ?>
    </body>
</html>
