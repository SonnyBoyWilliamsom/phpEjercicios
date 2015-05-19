<?php

$sum=0;
echo"Enter the numbers:";
    $number1;
    $c=0;
    while (fscanf(STDIN, "%d\n", $number1)==1){
            $sum=$number1+$sum;
            $c++;
    } 
    if($c!=0){
        $media=$sum/$c;  
        echo "Average of $c numbers you entered is $media";
        
    }else{
        echo "You did not entered any number!";
    }
   
    
?>

