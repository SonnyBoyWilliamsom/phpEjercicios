<?php 
include('../functions/funtions.php');

/*Controlador de acciones*/
$a = check_get('a');

switch ($a){
    case 'login': check_login(); break;
    case 'register': echo 'te quieres registrar'; break;
    case 'forgot': echo 'recuperar contraseña'; break;
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
      <?php
      /*Controlador de vistas*/
      $v = check_get('v');
      switch ($v){
          case 'register': include('../template/register.php'); break;
          case 'forgot': include('../template/forgot.php'); break;
          default : include('../template/login.php'); break;
      }
      
      
      ?>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
