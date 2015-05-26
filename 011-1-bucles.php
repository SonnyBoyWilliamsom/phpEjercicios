<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bucles</h1>
        <p>Sirven para ejecutar un código N veces (minetras la condición se cumpla) o para pintar el valor de la variable en cada una de sus vueltas</p>
        
        <!-------------------------------------------------------------------------------->
        
        <h2>Bucle While</h2>
       
        <?php
        $a=0;
            while ($a<=10){
                
                echo $a.'-';
                $a++;
            }
        ?>
        <br>
        <?php
        $a=0;
            while ($a<=10){
                
                echo 10-$a.'-';
                $a++;
            }
        ?>
    </body>
</html>
