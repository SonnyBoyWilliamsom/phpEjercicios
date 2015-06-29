<?php
//Abrimos la carpeta que queremos leer -> opendir(carpeta). Ademas se crea un array con el nombre de los archivos para poder recorrerlo hacia delante y hacia atrás
$directorio = opendir("upload/");
$p = 0;
$fotos = array();
while ($nameArchivo = readdir($directorio)) {

    if (substr($nameArchivo, 0, 1) != ".") {
        $fotos[$p] = $nameArchivo;
        $p++;
    }
}

if( !isset($_GET["position"])){ //sino viene la información por GET que necesita este documento para funcionar, quiere decir que han intentado ejecutar este fichero sin pasar previamente por la galería, por tanto le enviamos a ella para que pinchen una foto
    header("location:index.php");
}else{
    extract($_GET);
    $positionWa=$position-1;
    $positionWs=$position+1;
    if($position==0){
        $positionWa = count($fotos)-1;
    }else if($position==count($fotos)-1){
        $positionWs=0;
    }
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section id="watch">
            <img  src="upload/<?=$fotos[$position]?>" alt="" width="300"/>
            
            
            <a href="watch.php?position=<?=$positionWa?>">Anterior</a>
            <a href="galeria.php">Ver Galería</a>
            <a href="watch.php?position=<?=$positionWs?>">Siguiente</a>
            
        </section>
        
         <!--Cerramos el directorio previamente abierto-->
        <?php 
var_dump($fotos);
        closedir($directorio) ?>
    </body>
</html>
