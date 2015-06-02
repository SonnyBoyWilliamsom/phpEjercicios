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
        <h2>Recorrer un array tradicional</h2>
        <?php $colores=array("azul","violeta","verde","rojo"); ?>
        
        <h3>WHILE</h3>
        
        <?php $i=0; ?>
        <ul>
        <?php while($i<count($colores)){ ?>
            <li> <?= $colores[$i++];  ?> </li> 
           
        <?php } ?>
        </ul>
            
        <h3>FOR</h3>
         <ul>
        <?php for($i=0; $i<count($colores);$i++){ ?>
            <li> <?= $colores[$i]; ?> </li> 
           
        <?php } ?>
        </ul>
        
        <h3>FOREACH</h3>
         <ul>
        <?php foreach($colores as $indice=>$color){ ?>
            <li> <?= $indice.": ".$color; ?> </li> 
           
        <?php } ?>
        </ul>
        <!---Concatenar valores de un array tradicional--->
        <?php $telefonos=array("123 465 798","654 321 321"," 987 654 321","321 654 654"); 
        $lista_telfs="";
        for($i=0;$i<count($telefonos);$i++){
            $lista_telfs .= $telefonos[$i]."* ";
        }
        echo rtrim($lista_telfs,"* ");
        ?>
      
    </body>
</html>
