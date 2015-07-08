<?php 
if(isset($_POST["formLogin"])){
    extract ($_POST);
    if($nameUser=="Jairo" && $passUser=="1234jairo"){
        $msg="1";
        header("location:mensajeria.php?msg=$msg");
    }else{
        $msg="Login Incorrecto";
        header("location:index.php?msg=$msg");
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestor de Correo</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1>LogIn</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="nameUser" placeholder="*Name User" required>
            <input type="password" name="passUser"  placeholder="*Password" required>
            
            <input type="submit" name="formLogin" value="Go" >
            
            
        </form>
        <p><?=$_GET["msg"]?></p>
    </body>
</html>
