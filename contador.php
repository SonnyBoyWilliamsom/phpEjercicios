
        <?php
    
        $a = fscanf(STDIN, "%s\n",$c);
        $repeated=false;

        for ($i=0; $i<=strlen($c); $i++){
        
            $contador=0;
            
            for ($n=$i+1; $n<strlen($c)+1; $n++){
             
                if($c[$i] == $c[$n]){
            
                    $contador++;
                    $repeated=true;
                 
                }
                
                if($n==strlen($c)){
                
                    echo " $c[$i] is $contador times repeated\n";
                            
                }
            }
             
        }
       
        if($repeated==false){
            echo "NO LETTERS REPEATED!\n";
        }
?>
