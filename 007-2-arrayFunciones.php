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
        
        <h2>Función que devuelve el número de elementos de un array</h2>
        
        <?php
        // Función count($var_array)= devuelve el número de elementos que hay en un array 
        //A.asociativo
        $usuarios=array("u1"=>"Elena","u2"=>"Pablo","u3"=>"Luis");
       
        $users=array("Elena","Pablo","Luis");
        
                ?>
        <p>El número de elementos que tiene <?php echo '$usuarios'; ?> es <?php echo count($usuarios)?></p>
        <p>El número de elementos que tiene <?php echo '$users'; ?> es <?php echo count($users)?></p>
        
        
       <!--------------------------------------------------------------------------------->
       <h2>Crear un array a partir de un String</h2>
        
        <?php
        //Función explode(caracter de division,$string)=devuelve un array resultado de la cadena de texto a partir del caracter buscado. Divide la cadena de texto de entrada y cre un array con estos sutextos
        
        $string="jairo@cice.es,carmen@cice.es,jesus@cice.es";
        $emails=explode(",",$string);//$emails=array("jairo@cice.es, carmen@cice.es...)
        var_dump($emails);
       
        ?>
        <!------------------------------------PRACTICAS--------------------------------------------->
        
       <p>El email de <?php echo $emails[0];?> tiene <?php echo strlen($emails[0]);?> caracteres</p> 
      
        <!------------------------------------------------------------------------------------------>
        
       <h2>Obtener el último elemento de un array</h2>
       <h3>Con explode() y count()</h3><!----------------------------------------------->
       <?php 
       
       $fichero="casa.otro.blanca.jpg";
       $miniarray=explode (".",$fichero);
       $a=count($miniarray);
               
        ?>
       <p>La extensión de <?php echo '$fichero'?> es <?php  echo $miniarray[$a-1] ?></p>
       <h3>Con ltrim() y strrchr()</h3><!----------------------------------------------->
       <p>La extensión de <?php echo '$fichero'?> es <?php  echo ltrim(strrchr($fichero, "."),".") ?></p>
       <h3>Con ltrim() y strrchr()</h3><!----------------------------------------------->
           <?php 
         $fichero="casa.otro.blanca.jpg";
         $fichero_array=explode(".",$fichero);
         echo end($fichero_array);
       ?>
         <!------------------------------------------------------------------------------------------> 
         <h2>Obtener una cadena de texto desde un array</h2>
         <?php 
         //Función implode(caracter de división, $var_array)=devuelve una cadena de texto creada a partir de los elementos de un array, separandolos por el caracter de divisió
         
           $emails=array("jairo@cice.es","carmen@cice.es","jesus@cice.es");
           $string=implode(", ",$emails);
           
           $final=end($emails);
          
           echo $final;
        ?>
         
         <!------------------------------------------------------------------------------------------> 
         <h2>Crear variables a partir de las claves de un array asociativo</h2>
         <?php
         
         //Función extract($var_array)=crea variables a partir de las claves de un array asociativo
         $user=array("nombre"=>"Elena","email"=>"elena@cice.es","dni"=>"789");
         extract($user);
         ?>
         
         <p><?php echo $nombre ?> tiene el email <?php echo $email ?></p>
         <!---------------------------------Ejercicio-------------------------------------------> 
         <?php 
         
         $objeto=array("color"=>"azul","tamaño"=>"medio","forma"=>"esférica");
         extract($objeto);
         ?>
         <p>el <?php echo '$color' ?> de mi objeto es <?php echo $color ?> y su <?php echo '$forma' ?> <?php echo $forma ?></p>
         
         <!----------------------------------------------------------------------------> 
           <h2>Devolver un valor aleatorio de un array</h2>
         <?php
        
         //Función array_rand($var_array)=devuelve un número de posición aleatorio del array
         
         $nombres=array("Elena","Pablo","Luis");
         $num_pos=  array_rand($nombres);
         echo $num_pos;
         ?>
           <p>Le toca fregar a <?php echo $nombres[array_rand($nombres)]?></p>

    </body>
</html>
