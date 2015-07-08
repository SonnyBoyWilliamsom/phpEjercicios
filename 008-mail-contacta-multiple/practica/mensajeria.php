<?php
    if($_GET){
        $msg="Login Correcto";
    }else{
        header("location:index.php");
    }
?>
<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h3><?=$msg?></h3>
        <h1>Nuevo mensaje</h1>
        
        <form action="mail.php" method="post">
            Destinatario: <input type="text"  name="nombre" placeholder="*Nombre" required><br>
            Correo Electrónico:<input type="text"  name="emailDestination" placeholder="*example1@domain1.com, example2@domain2.com, ..."><br>
            Asunto:<input type="text"  name="subject" placeholder="Asunto" ><br>
            <textarea name="mensaje" placeholder="Mensaje" rows="10" cols="70"></textarea><br>
            <input type="submit"  name="nuevoMensaje" value="Enviar" required><br>
        </form>
        <a href="index.php">Atrás</a>
      
    </body>
</html>
