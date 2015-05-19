<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h2>Número de elementos que hay en un array</h2>
       <?php
            $array_a=array("Name"=>"Jairo", "Phone"=>"678678456","City"=>"Madrid");
            echo count($array_a);
       ?>
        <!------------------------------------------------------------------------>
        
        <h2>Crear un array a partir de un string</h2>
        <?php 
            $cadena_r="Maite, 657463547, Segovia";
            echo count(explode(",", $cadena_r));
        ?>
       <!-------------------------------------------------------------------->
        
        <h2>Obtener el último elemento de un array</h2>
        <?php
            echo end(explode(",", $cadena_r));
        ?>
       
       
        
        <!-------------------------------------------------------------------->
         
        <h2>Crear un string a partir de un array</h2> 
        <?php 
            $array_a=array("Name"=>"Jaíro", "Phone"=>"678678456","City"=>"Madrid");
            echo implode(", ", $array_a).'<br>';
            $cadena_b="Jaí roda";
            echo $cadena_b.'<br>';
            echo mb_strlen($cadena_b, "UTF-8").'<br>';
            echo str_word_count($cadena_b,0,"í").'<br>';
            echo ucfirst(mb_strtolower($cadena_b,"UTF-8")).'<br>';
            $texto="árbol verde"; //Árbol verde∫
            echo mb_strtoupper(mb_substr($texto, 0,1, "UTF-8"),"UTF-8").  mb_substr($texto, 2,mb_strlen($texto,"UTF-8"));
            
            echo strchr("e", $needle, $part)
                
            
        ?>
        <!--------------------------------------------------------------------->
        
        <h2>Crear variables a partir de las claves de una A.asociativo</h2>
        <?php
            $array_a=array("Name"=>"Jairo", "Phone"=>"678678456","City"=>"Madrid");
            extract($array_a);
            echo $Name;
            echo $Phone;
            echo $City;
        ?>
        
        
        
        <!------------------------------------------------------------------->
        
        <h2>Devolver un valor aleatorio de un array</h2>
        <?php
            echo ran
        ?>
        
    </body>
</html>
