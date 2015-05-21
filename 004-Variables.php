<?php
//$variable= cobntenedor que almacena datos de tipo string, integer, double o boolean.
//Inicializacion de una variable=asignar un valor inicial a la variable

$miNombre="Jairo Pairo Wairo Cairo Lairo Saurio"; //string
$edad=55;//integer
$altura=2.2;//double
$hombre=true;//boolean

echo "Jairo Pairo Wairo tiene 16 años, mide 2.2 m y es hombre <br>";
echo '$miNombre es '.$miNombre.'<br>';//Concatenación de bloques de información: mediante el símbolo de puntuación PUNTO (.)

echo $miNombre.' tiene '.$edad.' años , mide '.$altura.' m y es hombre';
echo ' <br> $edad vale '.$edad.' y $altura vale '.$altura.'<hr>';

/*FUNCIONES-------------------------------------------------------------------------*/
echo gettype($miNombre).'<br>';// Devuelve el tipo de la variable de entrada
echo isset($altura);
echo empty($edad);
unset($altura);
echo empty($edad);
?>