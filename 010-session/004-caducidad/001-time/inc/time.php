<?php
//session_start(); //En este caso, la sesion ya ha sido iniciada en security.php luego en este archivo iniciar sesión no es necesario

$inactivo = 10; //valor numérico que representa los "sg" que permito que el usario esté inactivo, si se supera este valor numérico desconectaré al usuario

if(isset($_SESSION["tiempo"])){
    $vida_session = time() - $_SESSION["tiempo"]; 
    if($vida_session>$inactivo){
        session_destroy();
        header("location:index.php?c=2");
    }
}

$_SESSION["tiempo"] = time(); 





//Cuándo cerramos la sesión del usuario:
//      - El usuario cierra el navegador 
//      - Si el usuario decide salir de nuestro sitio
//      - El tiempo de inactividad del usuario supere "X" cantidad de tiempo 
//      - Modificando los ficheros de configuración del servidor 
