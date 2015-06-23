
<?php
//Listado de fotos############################sdasdasadsadsadsadsadsda
$fotos=array(
            array("img"=>"foto1.jpg","titulo"=>"Chica feliz"),
            array("img"=>"foto2.jpg","titulo"=>"Boda perfecta"),
            array("img"=>"foto3.jpg","titulo"=>"Bebe en red")
        );

//Seguridad############################
if( !isset($_GET["position"])){ //sino viene la información por GET que necesita este documento para funcionar, quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enviamos a ella para que pinchen una foto
    header("location:index.php");
}else{
    extract($_GET);
    $positionWa=$position-1;
    $positionWs=$position+1;
    if($position==0){
        $positionWa = 2;
    }else if($position==count($fotos)-1){
        $positionWs=0;
    }
//    switch($position){
//        case 0:
//            $positionWa=2;
//            $positionWs=1;
//            break;
//        case 1:
//            $positionWa=0;
//            $positionWs=2;
//            break;
//        case 2:
//            $positionWa=1;
//            $positionWs=0;
//            break;
//    }
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
        
        <h1><?=$fotos[$position]["titulo"]?></h1>
        
        <section id="watch">
            <img src="img/<?=$fotos[$position]["img"]?>" alt=""/>
            
            
            <a href="watch.php?position=<?=$positionWa?>">Anterior</a>
            <a href="index.php">Ver Galería</a>
            <a href="watch.php?position=<?=$positionWs?>">Siguiente</a>
            
        </section>
        
        
        
    </body>
</html>
