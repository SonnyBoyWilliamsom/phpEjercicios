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
<!------------------------------------------------------------------------->
    <h2>Práctica validación de hora</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <input name="hora" type="number" placeholder="Hora 0-23" required>*
        <input name="formHora" type="submit" value="Send">
               
    </form>
    
    <?php
    if(isset($_GET["formHora"])){
        extract($_GET);
        if(0<=$hora && $hora<=23){
            switch($hora){
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                    $msgh= "Buenos días";
                    break;
                case 12:
                case 13:
                case 14:
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:
                case 20:
                    $msgh= "Buenas tardes";
                    break;
                default :
                    $msgh= "Buenas noches";
            }
            
        }else{
        $msgh= 'Hora no válida';
        }  
        echo $msgh;
    }
    
    ?>
     <!-------------------------------------------------------------------------------->
        
        <h2>Recorrer un array tradicional</h2>
        <?php 
        $a=0;
        $alumnos=array("oscar","jairo","jesús","imanol");
        while ($a<count($alumnos)){
            echo $alumnos[$a++].', ';
        }
        ?>
                    
    </body>
</html>
