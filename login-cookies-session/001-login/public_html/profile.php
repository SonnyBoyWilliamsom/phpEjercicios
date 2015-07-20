<?php 
include('../functions/funtions.php');
session_start();//Con la función session_start no se inicia sesión, esta ya existe una vez nos conectamos, lo que en realidad estamos haciendo es dejar a php uqe pueda consultar los datos que se almacena en dicho array
if(!isset($_SESSION["username"]) || empty($_SESSION["username"])){
    session_destroy();
    header("location:index.php");
    exit();
}

/*Controlador de acciones*/
$a = check_get('a');

switch ($a){
    case 'login': check_login(); break;
    case 'register': echo 'te quieres registrar'; break;
    case 'forgot': echo 'recuperar contraseña'; break;
    case 'logout': end_session(); break;
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      <h1>Welcome <?=$_SESSION['username']?></h1>
      <a href="<?=$_SERVER["PHP_SELF"]?>?a=logout" class="small button">LogOut</a>
      
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
