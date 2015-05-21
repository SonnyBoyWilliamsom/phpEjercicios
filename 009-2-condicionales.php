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
        <?php
        $nota=8;
              
//        if($nota<5){
//            echo 'Suspenso';
//        }else{
//            if($nota<7){
//                echo 'Bien';
//            }else{
//                if($nota<9){
//                    echo 'Notable';
//                }else{
//                    echo 'Sobre';
//                }
//            }
//        }
        
//        if($nota<5){
//            echo 'Suspenso';
//        }else if($nota<7){
//            echo 'Bien';
//            
//        }else if($nota<9){
//            echo 'Notable';
//        }else {
//            echo 'Sobresaliente';
//        }
        
        if($nota>=9){
            echo 'Sobresaliente';
        }else if($nota>=7){
            echo 'Notable';
        }else if($nota>=6){
            echo 'Bien';
        }else if($nota>=5){
            echo 'Aprobado';
        }else{
            echo 'Suspenso';
        }
        ?>
    </body>
</html>
