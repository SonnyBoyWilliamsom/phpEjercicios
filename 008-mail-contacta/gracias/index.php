<?php 
if(!$_POST){
    header("location:../index.php");
}
var_dump($_POST);
extract($_POST);

//Función mail(destino, asunto, mensaje, header)=envía el email y devuelve T/F si se ha enviado correctamente
//Los datos de nombre y apellidos y el telefono se pueden enviar concatenados a la sección de mensaje del mail:
$consulta .= "\r\n Email enviado por: $nombre $apellido con telefono $telefono";
//Hay que especificar la cabecera del email con el destinatario, el sender, CC, Bcc:
$header = "To: Cice <$departamento>"."\r\n";
$header .= "From: $nombre $apellido <$emailUser>"."\r\n";
$header .= "BCC: Jesús JefeMáximo <jesiaz75@gmail.com>";
//Una vez hemos establecido todos los parametros enecesarios para enviar el email se puede usar la funcion mail():


//Envío a CICE
if(mail($departamento, "Consulta desde web", $consulta, $header)){
    $title="¡Gracias! Hemos recibido tu consulta.";
    $subtitle="En los próximos días no pondremos en contacto contigo.";
}else{
    $title="¡Lo sentimos! Fallo en el envío del formulario.";
    $subtitle="Contacte con el administrador.";
}

//Envio de confirmación al usuario
$header = "To: $nombre $apellido <$emailUser>"."\r\n";
$header .= "From: Cice <$departamento>"."\r\n";

mail($emailUser,"Cice-Consulta:", $titulo."\r\n".$txt,$header);

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                font-family: sans-serif;
                padding: 10%;
                text-align: center;
            }
            h1{
                color: tomato;
            }
        </style>
    </head>
    <body>
        <h1><?=$title?></h1>
        <p><?=$subtitle?></p>
        <?php
        // put your code here
        ?>
    </body>
</html>
