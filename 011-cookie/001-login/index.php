<?php
//Si la sesión ya ha sido iniciada, se envía al usuario a la página perfil de usuario, no a la página principal de logueo
if (isset($_COOKIE["emailUser"])) {
    header("location:perfil.php");
} else {
    if (isset($_POST["login"])) {
        extract($_POST); //email, pass
        if ($emailUser == "jairo@jairo.com" && $passUser == "1234jairo") {
            setcookie("emailUser", $emailUser, time() + 10);
            header("location:perfil.php");
        } else {
            $class = 2;
            $msg = "Usuario o contraseña incorrecta";
        }
    }
}
?>
<!DOCTYPE html>
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
         
        </main>

    </body>
</html>
