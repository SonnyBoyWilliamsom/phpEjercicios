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
        <h2>SWITCH</h2>
        <?php
        $lugarNaciemiento="Madrid";
        switch ($lugarNaciemiento){
            case "barcelona":
                $mnsg= "Eres Catalán";
                break;
            case "zaragoza":
                $mnsg="Eres Maño";
                break;
            default:
                $mnsg="Eres ciudadano del mundo";
        }
        
        echo $mnsg;
        ?>
        
        <!------------------------------------------------------------------------->
        <h2>Validación con switch múltiple</h2>
            
        <?php
        $lugarNacimiento="huesca";
        
        if($lugarNacimiento=="huesca"||$lugarNacimiento=="teruel"||$lugarNacimiento=="zaragoza"){
            $msg="Eres Maño";
            
        }else if($lugarNacimiento=="barcelona"){
            $msg="Eres Catalán";
        }else{
            $msg="Eres ciudadano del mundo";
        }
        
        echo $msg;
        ?>
 <!------------------------------------------------------------------------->
        <h2>Ejercicio</h2>
                    
        <?php
        $edad=1900;
        $destino="francia";
        if(2015-$edad>=18){
            
            switch (mb_strtolower($destino,"UTF-8")){
            case "francia":
                $msg= "Von voayage";
                break;
            case "alemania":
                $msg="gute fahrt";
                break;
            case "inglaterra":
                $msg="Good Trip";
                break;
            default:
                $msg="Buen viaje";
        }
            
        }else{
            $msg="Debes viajar en compañia de un adulto";
        }
        echo $msg;
        ?>
        
    </body>
</html>
