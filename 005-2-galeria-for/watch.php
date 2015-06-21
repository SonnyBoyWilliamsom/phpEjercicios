<?php
if( !isset($_GET["nombreFoto"]) ){ //sino viene la información por GET que necesita este documento para funcionar, quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enviamos a ella para que pinchen una foto
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <h1>Fotografía</h1>
        
        <section id="watch">
            <img src="img/<?=$_GET["nombreFoto"]?>.jpg" alt=""/>
            <a href="index.php">Ver Galería</a>
        </section>
        
        
        
    </body>
</html>
