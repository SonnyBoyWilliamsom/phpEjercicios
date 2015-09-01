<?php
extract($_POST); //$nombre,$apellido,$sexo
if($sexo=="f"){
    $mng="Bienvenida amiga mía";
}else{
    $mng="Bienvenido";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Saludo:</h2>
        <p><?= $mng." ".$nombre." ".$apellido ?></p>
        
    </body>
</html>
