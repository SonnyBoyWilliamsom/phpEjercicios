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
        
        <h3>Bucle While</h3>
       
        <?php
        $a=0;
            while ($a<=10){
                echo $a++.'-';
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
         <!-------------------------------------------------------------------------------->
        
        <h3>Recorrer un array tradicional</h3>
        <?php 
        $a=0;
        $alumnos=array("oscar","jairo","jesús","imanol","yolanda");
        while ($a<count($alumnos)){
            echo $alumnos[$a++].', ';
        }
        ?>
       
          
        <h3>Bucle For</h3>
        <?php 
        for($i=0;$i<11;$i++){
            echo $i.'-';
            }?><br>
        <?php
        for($i=0;$i<11;$i++){
            echo 10-$i.'-';
        }?><br>
        <?php
        for($i=0;$i<count($alumnos);$i++){
            echo $alumnos[$i].'-';
        }
        
        ?>
    </body>
</html>
