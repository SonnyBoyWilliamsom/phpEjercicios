<?php
extract($_GET);
 $msg="";
if($_GET){
switch($code){
    case 0:
        $msg = "Archivo no apto";
        break;
    case 1:
        $msg = "Fichero ya existe. Se ha renombrado y subido correctamente";
        break;
    case 2:
        $msg = "Se ha subido correctamente";
        break;
    
    default: 
        $msg = "Error en el archivo";
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
       
        <h1>Upload</h1>
        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="File">
            <input type="submit" name="uploadForm" value="Send">
        </form>
        
        <p><?=$msg?></p>
        
    </body>
</html>
