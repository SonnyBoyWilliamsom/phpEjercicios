<?php

$miNombre="Jairo Pairo Wairo Cairo Lairo Saurio Mairio Daurio Wayro Amairio Yelairio Quiario Elairo Trinitario Fenario"; //string
$edad=55;//integer
$altura=2.2;//double
$hombre=true;//boolean
$futuro="";
$peso;
//Funcion unset($var_name) destruye el valor de las variables que le pasamos como argumento

echo isset($miNombre).'<br>';
echo $miNombre.'<br>';
unset($miNombre);
echo empty($miNombre).'<br>';

$curso="m108-php";
echo '<hr>El $curso que estas haciendo es el '.$curso.isset($curso);