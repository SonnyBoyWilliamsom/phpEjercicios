 <?php
 extract($_GET);
 $euroDollar=1.14;
 $libraDollar=1.58;
 
 
 //Primero se convierte la cantidad de entrada a dolares, para reducir así el número de posibilidades que tiene una combinación de 3.
 switch($origen){
     case "euro":
         echo 'euro-dollar';
         $dollar = $quantity * $euroDollar;
         echo $dollar;
         break;
     case "pound":
         $dollar = $quantity * $libraDollar;
          break;
     default: 
         $dollar = $quantity;
     
 }
 
 $dollarEuro = 0.88;
 $dollarLibra = 0.63;
 
  
 switch($destino){
     case "euro":
          echo 'dollar-euro';
         $conversion = $dollar * $dollarEuro;
         break;
     case "pound":
          echo 'dollar-libra';
         $conversion = $dollar * $dollarLibra;
          break;
     default: 
         $conversion = $dollar;
     
 }
 
 
 //Ahora se convierte los dolares a cualquier tipo de moneda
 
 
// extract($_GET);
// $dollarEuro=0.88;
// $dollarPound=0.63;
// 
//  if($origen=="euro"){
//    $toDollar= $quantity/$dollarEuro;/*Euro to dollar*/
//    echo "euro-dollar";
// }else if($origen=="pound"){
//    $toDollar= $quantity/$dollarPound;/*Pounds to dollar*/
// }else{
//    $conversion=$quantity;/*Dollar to dollar*/
// }
// /*********************/
// 
//  if($destino=="euro"){
//       echo "dollar-euro";
//    $conversion= $toDollar*0.88;/*Dollar to euro*/
//    echo $conversion;
// }else if($destino=="pound"){
//      echo "dollar-pound";
//    $conversion= $toDollar*0.63;/*Dollar to pound*/
// }else{
//    $conversion=$toDollar;/*Dollar to dollar*/
// }
// 


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
