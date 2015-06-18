 <?php
 extract($_GET);
 $dollarEuro=0.88;
 $dollarPound=0.63;
 
  if($origen=="euro"){
    $toDollar= $quantity/$dollarEuro;/*Euro to dollar*/
    echo "euro-dollar";
 }else if($origen=="pound"){
    $toDollar= $quantity/$dollarPound;/*Pounds to dollar*/
 }else{
    $conversion=$quantity;/*Dollar to dollar*/
 }
 /*********************/
 
  if($destino=="euro"){
       echo "dollar-euro";
    $conversion= $toDollar*0.88;/*Dollar to euro*/
    echo $conversion;
 }else if($destino=="pound"){
      echo "dollar-pound";
    $conversion= $toDollar*0.63;/*Dollar to pound*/
 }else{
    $conversion=$toDollar;/*Dollar to dollar*/
 }
 


     ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>El resultado de la conversión es:</h3>
       <?= round($conversion, 2); ?>
    </body>
</html>
