<?php 
$msg="";
if(isset($_POST["formSignin"])){
    extract($_POST);
    if($ageUser>=18){
       //mail(destino, asunto, mensaje, header)
        $header  = "To: $nameUser <$emailUser>"."\r\n";
        $header .= "From: noreply@registro.com";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        if(sex=="M"){
            $msgEmail="Bienvenida ";
        }else{
            $msgEmail="Bienvenido ";
        }
        $msgEmail.= "$nameUser. <br> Estos son tus datos de acceso: <br> Email: $emailUser <br> Pass: $passUser";
       if(mail($emailUser,"Registro",$msgEmail,$header)){
            $msg="Registro completado con éxito. Se te ha enviado más información al correo";
        }
    }else{
         $msg= "Has de ser mayor de edad para completar el registro";
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
       <h1>LogIn</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="nameUser" placeholder="*Nombre" required>
            <input type="email" name="emailUser" placeholder="*Email " required>
            <input type="password" name="passUser" placeholder="*Password" required>
            <input type="number" name="ageUser" placeholder="*Edad " required>
            <input type="radio" name="sex" value="H" checked>H
            <input type="radio" name="sex" value="M" >M
           
            <input type="submit" name="formSignin" value="Go" >
        </form>
       
       <h2><?= $msg ?></h2>
    </body>
</html>
