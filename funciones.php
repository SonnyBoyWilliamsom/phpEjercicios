<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

///////////////////////////////////////////gettype($miNombre)/////////////////////////////////////////////
//        
echo 'La variable $miNombre es de tipo: '.gettype($miNombre).'.<br>';// Devuelve el tipo de dato de la variable de entrada

/////////////////////////////////////////// isset($altura)////////////////////////////////////////////////
//       
echo '¿esta $miNombre inicializada?'.isset($altura).'<br>';//Devuelve true si la variable ha sido previamente definida, false en caso contrario. Es una función que permite varios argumentos o parametros de entrada. El resultado es una operación AND
    
//////////////////////////////////////////// empty($peso)/////////////////////////////////////////////////
//    
echo '¿$peso esta vacia?'.empty($peso).'<hr>';
//En empty() solo se permite el paso de un argumento
    
/////////////////////////////////////////////$var_name)////////////////////////////////////////////////////
//   
unset($miNombre);
//  destruye el valor de las variables que le pasamos como argumento


        ?>
    </body>
</html>
