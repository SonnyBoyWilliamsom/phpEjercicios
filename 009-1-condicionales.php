<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Condicionales if/false</h2>
        <?php
        $tope=18;
        $precio_copa_bar=10;
        if($precio_copa_bar<$tope){?>
            <p>Ponme copa</p>
        <?php }else{?>
            <p>No thanks</p>
        <?php } ?>
      
        <?php 
        $edadMia=18;
        $edadLimite=18;
        if($edadLimite>=$edadMia){?>
            <p>Ponme una copa mayor</p>
        <?php }else{ ?>
            <p>Ponme una copa</p>
        <?php } ?>
         
        
        <!-------------------------------------------------------------------------------------------------------------->
         <h2>Condicionales op.lógico</h2>
        <?php
        $num=rand(0,10);
        $a=2;
        $b=5;
        if($num==$a||$num==$b){?>
            <p>Has ganado con <?php echo $num."!";?></p>
        <?php }?>
    
    <!-------------------------------------------------------------------------------------------------------------->    
    
        <h2>Condicional con boleanos</h2>
       <?php
       $edad=25;
       $zapatillas=false;
       if($edad>=18&&!$zapatillas){?>
           <p>Pasa anda!</p><?php
       }else{ ?>
            <p>Ponme una copa</p>
        <?php } ?>
       
<!-------------------------------------------------------------------------------------------------------------->        <h2>Condicional con fuciones</h2>
        <?php
        if(isset($edad)){?>
            <p>Edad iniciada</p><?php
            
        }else{ ?>
            <p>No se inició a</p>
        <?php } ?>
<!--------------------------------------------------------------------------------------------------------------->
<h2>Prácticas</h2>
<h4>Comprobar el número de palabras</h4>

<?php
$texto_entrada="Hola soy Jaíro dfg";
$words_max=3;

if(str_word_count($texto_entrada,0,"í")<= $words_max){ ?>
<p>Good</p>
 <?php } else{ ?>
     
     <?php } ?>
<!--------------------------------------------------------------------------------------------------------------->

<h4>Validación extensión</h4>

<?php
$file="foto.gatito.bonito.jpg";
$formatoPermitido="jpg";

if(ltrim(strrchr($file, "."),".")==$formatoPermitido){ ?>
    <p> Formato permitido strrchr()  </p><?php } 

$new=explode(".", $file);

if(end($new)==$formatoPermitido){?>
    <p> Formato permitido end()</p> 
        <?php
}

if($new[count($new)-1]==$formatoPermitido){?>
   <p> Formato permitido count()</p>
        <?php } ?>
<!--------------------------------------------------------------------------------------------------------------->
<h2>Estructura de embudo</h2>

<?php
$edad=0;
$mujer=false;

if($edad>=18){
    if($mujer){?>
        <p>Pase, pase!</p>
    <?php }else{ ?>
         <p>Son 10 euros</p>
    <?php }
}else{ ?>
    <p>No puedes pasar chaval!</p>
<?php } ?>
    
<h2>Ejercicio Estructura de embudo</h2>
    <?php
    $billete=true;
    $destino="Francia";
    $mujer=true;
    
    if($billete){
        if($destino=="Francia"){
            if($mujer){ ?>
                <p>Bon voayage Miss</p>
            <?php }else{ ?>
                <p>Bon voayage Sr</p>
            <?php }
        }else{ ?>
            <p>Buen viaje</p>
        <?php } ?>
    <?php }else{ ?>
            <p>Compre un billete!!</p>
    <?php }
    
    ?>
    </body>
</html>
