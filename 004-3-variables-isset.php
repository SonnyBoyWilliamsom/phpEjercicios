<?php
//$variable= cobntenedor que almacena datos de tipo string, integer, double o boolean.
//Inicializacion de una variable=asignar un valor inicial a la variable

$miNombre="Jairo Pairo Wairo Cairo Lairo Saurio"; //string
$edad=55;//integer
$altura=2.2;//double
$hombre=true;//boolean
$futuro="";
$peso;

echo '¿esta $miNombre inicializada?'.isset($altura).'<br>';//Devuelve true si la variable ha sido previamente definida, false en caso contrario. Es una función que permite varios argumentos o parametros de entrada. El resultado es una operación AND
echo '¿esta $edad inicializada?'.isset($edad).'<br>';
echo '¿esta $altura inicializada?'.isset($altura).'<br>';
echo '¿esta $futuro inicializada?'.isset($futuro).'<br>';
echo '¿esta $hombre inicializada?'.isset($hombre).'<br>';
echo '¿esta $peso inicializada?'.isset($peso).'<br><hr>';

echo isset($miNombre, $altura, $peso);

