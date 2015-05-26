
        <?php
        //crear un programa que nos indique cual es el valor mas alto de los elementos de un array y nos diga que posicion ocupa.
        $i=0;//Inicialización del contador de control de los bucles de la función
        $n=1;
        echo "Enter numbers, I'll get the biggest one ;) ";
        while(fscanf(STDIN, "%d\n", $numbers )==1){//lectura de valores mientras el usuario siga introduciédolos
            $array_num[$i]=$numbers; //creación del array
            echo 'Enter number '.($i+2).'? ';//pregunta al usuario si quiere seguir introduciendo números
            $hay_numeros=true;//para comprobar si se han introducido valores
            $i++;//almacena la posición de array donde se guarda cada numero introducido
        }
        
        $biggest_num_pos=0;//variable que almacena la posición del número más alto del array
        
        if($hay_numeros){
            for($i=0;$i<count($array_num);$i++){//bucle for para recorrer el array de números

                if($array_num[$i]<$array_num[$i+1]&&$array_num[$biggest_num_pos]<$array_num[$i+1]){//valoración de resultado por posición
                    //Si (valor actual) menor a (valor siguiente) Y (mayor valor) menor que (valor siguiente)
                    $biggest_num_pos = $i+1;//el valor mayor corresponde a la posicion siguiente
                    $b=0;//REinicio de valores cada vez que se encuentra una nuevo valor máximo
                    $n=1;
                }elseif($array_num[$biggest_num_pos]==$array_num[$i+1]){
                //sino si el mayor valor sigue siendo el actual se contabiliza el numero de veces que aparece y las posiciones
                    ++$n;//numero de veces que aparece el mayor número
                    
                }

            }
            for($a=0;$a<count($array_num);$a++){//con este bucle recorremos $array_num para saber la posiciones del numero repetido
                  if($array_num[$biggest_num_pos]==$array_num[$a]){
                    $array_index[$b]=$a+1;//sumo uno para imrimirlo por pantalla como si comenzase la cuenta del array desde 1 y no desde 0
                    $b++;
                }
            }
             
        echo "The first biggest number you entered is ".$array_num[$biggest_num_pos]." in the ".($biggest_num_pos+1)."th position, appearing ".$n." times. "."Positions: ";
        $last_number=end($array_index);
        
        echo mb_substr(implode(", ", $array_index), 0, strlen(implode(", ", $array_index))-strlen($last_number)-2)." y ".$last_number;
        
        
        //var_dump($array_index);
        }else{
            echo "Hey! You did not enter any numbers!!";
            
        }
        
//crear una funcion llamada Valormaximo que nos indique cual es el valor mas alto de los elementos de un array y nos diga que posicion ocupa.
        //crear una funcion llamada "dividir" a la que le pasemos como argumento si queremos numeros pares o impares y que nos devuelva el numero de terminos encontrados segun la condicion
        ?>
  
