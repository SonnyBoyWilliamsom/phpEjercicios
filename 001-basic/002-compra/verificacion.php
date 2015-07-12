<?php

session_start(); //Se inicia sesión antes de hacer ninguna petición a la misma 

include './inc/head.php';


var_dump($_SESSION["products"]);


echo "Verificando";
include './inc/foot.php';
?>
