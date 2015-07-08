<?php
if (!isset($_POST["nuevoMensaje"])) {
    header("location:index.php");
} else {
    //Función mail(destino, asunto, mensaje, header)=envía el email y devuelve T/F si se ha enviado correctamente
    date_default_timezone_set('UTC');
    /*=====DESTINO========================================================================*/
    extract($_POST);
    var_dump($_POST);
    $destino=  explode(",", $emailDestination);
    echo count($destino);
    
    /*=====MENSAJE========================================================================*/
    $mensaje .= "\r\n Mensaje enviado por: Jairo \r\n".date('l jS \of F Y h:i:s A');
    
    /*=====HEADER=========================================================================*/
    for ($i = 0; $i < count($destino); $i++) {
        $header = "To: <$destino[$i]>" . "\r\n";
        $header.="From: Jairo <no-reply@jairo.com>" . "\r\n";
        echo "dentro for";
        if (mail($destino[$i], $subject, $mensaje, $header)) {
            $title = "¡Gracias por usar nuestro gestor de correo! ";
            $subtitle = "Tus mensajes han sido enviados correctamente";
        } else {
            $title = "¡Lo sentimos! Fallo en el envío del mensaje";
            $subtitle = "Contacte con el administrador.";
        }
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mensajes enviados correctamente</title>
        <style>
            h1{
                
                width: 100%;
                
            }
            p{
                font-size: 1.3em;
                color: teal;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        

       <h1><?=$title?></h1>
        <p><?=$subtitle?></p>
    </body>
</html>
