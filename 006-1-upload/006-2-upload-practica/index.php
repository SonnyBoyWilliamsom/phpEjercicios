<?php
extract($_GET);
 $msg="";
if($_GET){
switch($code){
    case 0:
        $msg = "Error en el archivo";
        break;
    case 1:
        $msg = "Excede tamaño permitido";
        break;
    case 2:
        $msg = "Extensión no permitida";
        break;
    case 3:
        $msg = "Imagen subida correctamente";
        break;
    case 4:
        $msg = "Documento subido correctamente";
        break;
    
    default: 
        $msg = "Fallo en la subida";
}
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
        <h1>Subida de archivos</h1>
        <h4>Solo se permite la subida de imagenes y documentos tipo .doc o .pdf</h4>
        <p>Max. Size: 1Mb</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="FotoDoc">
            <input type="submit" name="upForm" value="Send">
        </form>
        <h1><?=$msg?></h1>
    </body>
</html>
