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
        <h1>OPERADORES</h1>
        <h2>Operadores de Asignación (=)(+=)(-=)</h2>
        <?php
            $a=2;
            echo '$a es igual a '.($a+=3)."<br>";
            echo '$a es igual a '.($a-=1)."<br>";
        ?>
        
        <!--------------------------------------------------------------->
        
         <h2>Operadores de Igualdad (==)(===)(!=)(!==)</h2>
        <?php
            $a=1;
            $b="1";
            $c=3;
            echo "¿$a es igual a $b? ".($a==$b)."<br>";
            echo "¿$a es diferente de $c? ".($a!=$c)."<br>";
            echo "¿$a es igual en caracter y tipo a $b? ".($a===$b)."<br>";
            echo "¿$a es diferente en caracter y tipo a $c? ".($a!==$c)."<br>";
            
        ?>
         
        <!--------------------------------------------------------------->
        
         <h2>Operadores de Comparación (<)(>)(<=)(>=)</h2>
        <?php
            $a=1;
            $b=3;
            $c=3;
            echo "¿$a es mayor que $c? ".($a>$c)."<br>";  
            echo "¿$a es menor que $c? ".($a<$c)."<br>";  
            echo "¿$c es menor o igual que $c? ".($c<=$c)."<br>";  
        ?>
         
        <!--------------------------------------------------------------->
         
          <h2>Operadores de lógicos (&&)(||)</h2>
        <?php
            $a=2;
            $b=3;
            $c=5;
            echo "Resultado: ".(($a<$b)&&($c>$a))."<br>";  
            echo "Resultado: ".(($a>$b)&&($c>$a))."<br>";  
            echo "Resultado: ".(($a<$b)||($c>$a))."<br>";  
            echo "Resultado: ".(($a>$b)||($c>$a))."<br>";  
        ?>
           <!--------------------------------------------------------------->
         
          <h2>Operadores de autoincremento (++)(--)</h2>
        <?php
            $a=2;
            echo ++$a."<br>";  
            $a=4;
            echo $a."<br>";  
            echo ++$a."<br>";  
        
            
        ?>
          <!--------------------------------------------------------------->
         
          <h2>Operadores de autoincremento (+)(-)(/)(*)(%)</h2>
        <?php
            $a=9;
            $b=5;
            echo "($a+$b) = ".($a+$b)."<br>";  
            echo "($a-$b) = ".($a-$b)."<br>";  
            echo "($a/$b) = ".($a/$b)."<br>";  
            echo "($a*$b) = ".($a*$b)."<br>";  
            echo "($a%$b) = ".($a%$b)."<br>";  
            
            
        ?>
          
    </body>
</html>
