<?php
$mng="";
if($_GET){
    switch ($_GET["c"]){
        case 0:
            $mng="Fichero no cumple requisitos";
            break;
       
        case 2:
            $mng="Archivo subido correctamente";
            break;
        case 3:
            $mng="Fallo en la subida del archivo";
            break;
       
        default:
            $mng="Fallo en la creación del directorio";
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
       
        <h4>Subida de imagenes </h4>
        <p>Max. Size: 1Mb</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit" name="upForm" value="Send">
        </form>
        <h3><?=$mng?></h3>
        <form action="galeria.php" method="get">
            <input type="submit" name="upForm" value="GALERIA">
        </form>
       
    </body>
</html>

