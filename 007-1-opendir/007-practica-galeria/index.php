<?php
$mng="";
$clase="";
if($_GET){
    switch ($_GET["c"]){
        case 0:
            $mng="Fichero no cumple requisitos";
          
            break;
       
        case 2:
            $mng="Archivo subido correctamente";
            $clase=2;
            break;
        case 3:
            $mng="Fallo en la subida del archivo";
           
            break;
       
        case 4:
            $mng="Fallo en la creación del directorio";
            
            break;
        default:
            $mng="Galería vacía";
          
            break;
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
       
        <h2>Subida de imágenes </h2>
        <p>Max. Size: 1Mb</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit" name="upForm" value="Send">
        </form>
        <h3 class="mng<?=$clase?>"><?=$mng?></h3>
        <form action="galeria.php" method="get">
            <input type="submit" name="upForm" value="GALERIA">
        </form>
       
    </body>
</html>

