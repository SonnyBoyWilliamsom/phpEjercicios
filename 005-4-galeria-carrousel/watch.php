<?php
//Seguridad############################
if( !isset($_GET["nombreFoto"],$_GET["title"]) ){ //sino viene la información por GET que necesita este documento para funcionar, quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enviamos a ella para que pinchen una foto
    header("location:index.php");
}else{
    extract($_GET);
    
    switch($position){
        case 0:
            $positionWa=2;
            $positionWs=1;
            break;
        case 1:
            $positionWa=0;
            $positionWs=2;
            break;
        case 2:
            $positionWa=1;
            $positionWs=0;
            break;
    }
}

//Listado de fotos############################
$fotos=array(
            array("img"=>"foto1.jpg","titulo"=>"Chica feliz"),
            array("img"=>"foto2.jpg","titulo"=>"Boda perfecta"),
            array("img"=>"foto3.jpg","titulo"=>"Bebe en red")
        );

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <h1><?=$title?></h1>
        
        <section id="watch">
            <img src="img/<?=$nombreFoto?>" alt=""/>
            
            
            <a href="watch.php?nombreFoto=<?=$fotos[$positionWa]["img"]?>&title=<?=$fotos[$positionWa]["titulo"]?>&position=<?=$positionWa?>">Anterior</a>
            <a href="index.php">Ver Galería</a>
             <a href="watch.php?nombreFoto=<?=$fotos[$positionWs]["img"]?>&title=<?=$fotos[$positionWs]["titulo"]?>&position=<?=$positionWs?>">Siguiente</a>
            
        </section>
        
        
        
    </body>
</html>
