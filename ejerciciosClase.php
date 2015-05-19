<?php

echo "<h1>Hola que tal amigo?</h1>";
echo "<h1>Ahora vamos ha crear variables y las mostraremos por pantalla:</h1>";

$primera= 'Mi primera variable es una de tipo String<br >';
$segunda= 10.4;//La segunda variable es de tipo 'float'
$tercera= 6;//La tercera variable es de tipo 'int'
$cuarta= "";
$quinta=NULL;
$sexta=0;

echo "<h1>\$primera ".$primera."</h1>";
echo "<h2>".$segunda."</h2>";
echo "<h3>".$tercera."</h3>";

echo "<h3>Asi de contento me quedo cuando me salen las cosas:</h3>";
echo '<img src="http://www.lagacetadelanus.com.ar/wp-content/uploads/2015/03/mono.jpg" alt="mono monito" style="width:300px;height:220px" ><hr>';

/* A continuacion se comprueban si las variables anteriores estan inicializadas con las funciones: isset($variables) y empty($variable) */

echo '<br>La función isset($primera, $segunda) muestra si la variable que se le ha pasado como parametro ha sido previamente inicializada: '. isset($primera,$segunda);
echo '<br><br>isset() considera una variable inicializada a toda aquella que sea distinta de NULL, es decir una variable de valor 0 o con ningún carácter se considerará como inicializada';

echo '<br><br>Valor de isset($cuarta) si $cuarta = ""; ->'. isset($cuarta);
echo '<br><br>Valor de isset($cuarta) si $cuarta = 0; ->'. isset($cuarta);
//$cuarta=NULL;

echo '<br><br>Valor de isset($cuarta) si $cuarta = NULL; ->'. isset($cuarta).'<hr>';




/*En PHP se pueden transformar los tipos de las variables, la sintaxis es (tipo)$variable siendo lo que esta entre comillas el tipo al que se quiere transformar la $variable */

$var_trans=(integer)$segunda;//$segunda es de tipo double. En esta linea de codigo pasa a ser de tipo integer
echo $var_trans.'<br>';//Para imprimir en pantalla el mismo resultado bastaria con 'echo (integer)segunda';
echo $segunda;


   

