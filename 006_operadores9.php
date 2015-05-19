<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h2>Operadores de Asignación (=) (+=) (-=)</h2>
        <?php
        $a=2;
        echo '$a es igual a '.$a."<br>";
        
        $a=3; //reasignamos valor a la variable
        echo '$a es igual a '.$a."<br>";
        
        $a+=2; //$a=$a+2 => $a=3+2 => $a=5
        echo '$a es igual a '.$a."<br>";
        
        $a-=1; //$a=$a-1 => $a=5-1 => $a=4
        echo '$a es igual a '.$a."<br>";
        ?>
        
        <!----------------------------------------------------------------------------->
        
        <h2>Operadores de igualdad (==) (!=) (===) (!==)</h2>
        <?php
        $a=1;
        $b="1";
        $c=3;
        
        echo "¿$a es igual a $b?".($a==$b)."<br>";
        echo "¿$a es diferente a $c?".($a!=$c)."<br>";
        echo "¿$a es igual en caracter y tipo a $b?".($a===$b)."<br>";
        echo "¿$a es diferente en caracter y tipo a $b?".($a!==$b)."<br>";
        ?>
        
        <!----------------------------------------------------------------------------->
        
        <h2>Operadores de comparación (<) (>) (<=) (>=)</h2>
        <?php
        $a=1;
        $b=3;
        $c='3';
        
        echo "¿$a>$b?".($a>$b)."<br>";
        echo "¿$a<$b?".($a<$b)."<br>";
        echo "¿$c<=$b?".($c<=$b)."<br>";
        echo "¿$c>=$b?".($c>=$b)."<br>";        
        ?>
        
        <!----------------------------------------------------------------------------->
        
        <h2>Operadores lógicos (&&)=(AND) / (||)=(OR) </h2>
        <?php
        $a=2; 
        $b=3;
        $c=5;
        
        echo "Resultado: ".( ($a<$b)&&($c>$a) )."<br>"; // T && T => T
        echo "Resultado: ".( ($a>$b)&&($c>$a) )."<br>"; // F && T => F
        echo "Resultado: ".( ($a<$b)||($c>$a) )."<br>"; // T || T => T
        echo "Resultado: ".( ($a>$b)||($c>$a) )."<br>"; // F || T => T        
        ?>
        
        <!----------------------------------------------------------------------------->
        
        <h2>Operadores de autoincremento (++) (--)</h2>
        <?php
        $a=2;
        echo ++$a."<br>";
        
        $a=4;
        echo $a++."<br>";
        echo $a;
        ?>
        
        <!----------------------------------------------------------------------------->
        
        <h2>Operadores aritméticos (+) (-) (*) (/) (%)</h2>
        <?php
        $a=3;
        $b=6;
        
        echo "$a+$b=".($a+$b)."<br>";
        echo "$a-$b=".($a-$b)."<br>";
        echo "$a*$b=".($a*$b)."<br>";
        echo "$b/$a=".($b/$a)."<br>"; //Devuelve el cociente de una división
        echo "$b%$a=".($b%$a)."<br>"; //Devuelve el resto de una división (Módulo)
        
        ?>
        
    </body>
</html>
