<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prácticas de clase</title>
    </head>
    <body>
        <h2>Crear un string a partir de un array</h2> 
        <?php
        //Función implode(caracter de división,$var_array) = devuelve una cadena de texto creada a partir de los elementos de un array, separándolos por el caracter de división
        $emails=array("elena@cice.es","oscar@cice.es","jairo@cice.es","carmen@cice.es","solode@prueba.es");
        
        
        $a=  strlen(end($emails));
        $string_emails=implode(", ", $emails);
        $b= strlen($string_emails);
      
        echo mb_substr($string_emails, 0, $b-$a-2)." y ".end($emails);
        
        
        
        ?>
    </body>
</html>
