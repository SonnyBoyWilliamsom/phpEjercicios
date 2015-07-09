<?php
session_start(); //Se inicia sesión antes de hacer ninguna petición a la misma
$msg = "";
$class = "";
//Si la sesión ya ha sido iniciada, se envía al usuario a la página perfil de usuario, no a la página principal de logueo
if (isset($_SESSION["emailUser"])) {
    header("location:perfil.php");
} else {
    //Si no se ha iniciado sesión previamente se inicia el proceso de logueo
    if (isset($_POST["login"])) {
        extract($_POST); //email, pass
        if ($emailUser == "jairo@jairo.com" && $passUser == "1234jairo") {
             $_SESSION["emailUser"]=$emailUser;
             header("location:perfil.php");
        } else {
            $class = 2;
            $msg = "Usuario o contraseña incorrecta";
        }
    }
}
if($_GET["c"]==1){
     $class = 3;
     $msg = "Sesión cerrada correctamente";
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
        <title>LogIn</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="login">
        <h1>Log In</h1>
        <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="email" name="emailUser" placeholder="Email" required>
                <input type="password" name="passUser" placeholder="Password" required>

                <input type="submit" name="login" value="Go">

            </form>
            <p class="msg_<?= $class ?>"><?= $msg ?></p>
        </main>
<?php
// put your code here
?>
    </body>
</html>
