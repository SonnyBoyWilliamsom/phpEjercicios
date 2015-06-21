<?php
$fotos=array("foto1","foto2","foto3");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
        <h1>Galería de fotografía</h1>
        
        <section id="galeria">
            
            <?php for($i=0; $i<count($fotos); $i++){ ?>
                <a href="watch.php?nombreFoto=<?=$fotos[$i]?>">
                    <img src="img/<?=$fotos[$i]?>.jpg" alt=""/>
                </a>
            <?php } ?>
            
        </section>
        
    </body>
</html>
