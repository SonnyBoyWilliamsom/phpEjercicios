<?php 
/*CONTROLADOR de vistas comprobando la variable "view" que nos viene de $_GET*/
$view=check_get('view');
switch($view){
    case "forgot": include '../views/forgot.php'; break;
    case "signup": include '../views/signup.php'; break;
    default: include '../views/login.php'; break;
}

?>

