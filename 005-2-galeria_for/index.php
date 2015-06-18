<?php 
$pictures=array("river.jpg","singapore.jpg","windows.jpg");
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
            <a href="watch.php?nombreFoto=<?=$pictures[$i]?>&title=River">
                <img src="img/<?=$pictures[$i]?>" alt="">
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
