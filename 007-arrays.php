<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Arrays</h1>
<!--        // ARRAYS: coleccion de datos o listado de valores asociados a claves o índices
//        Tipos de Arrays: 
//            -Array asociativo: asocia valor a una clave. 
//                Sintaxis: $var = array("clave"=>"valor","clave"=>"valor",...)
//                Acceso a un dato: $var["clave"]
//            -Array tradicional: asocia valores a índices o posiciones
//                Sintaxis: $var=array("valor1","valor2","valor3",...)
//                Acceso a un dato: $var[0]
-->
        <p>Coleccion de datos o listado de valores asociados a claves o índices</p>
        <h2>Array asociativo</h2>
        <?php
        
        $capitales=array("España"=>"Madrid",
                        "Francia"=>"París",
                        "Inglaterra"=>"Londres",
                        "Alemania"=>"Berlín");
        
        echo "La capital de España es ".$capitales["España"]."<br>";
        echo "La capital de Francia es ".$capitales["Francia"]."<br>";
        echo "La capital de Inglaterra es ".$capitales["Inglaterra"]."<br>";
        echo "La capital de Alemania es ".$capitales["Alemania"]."<br>";
        echo "La capital de Alemania es ".$capitales["Alemania"]."<br>";
        
        ?>
        
        <p>La capital de España es <?php  echo $capitales["España"]; ?></p>
        <p>La capital de España es <?php  echo $capitales["Francia"]; ?></p>
        <p>La capital de España es <?php  echo $capitales["Inglaterra"]; ?></p>
        <p>La capital de España es <?php  echo $capitales["Alemania"]; ?></p>
        
        <!---------------------------------------------------------------------->
        
        <h2>Array Tradicional</h2>
       <?php
        
        $capitales=array("Madrid",
                        "París",
                        "Londres",
                        "Berlín");
       ?>
        
        <p>La capital de España es <?php  echo $capitales[0]; ?></p>
        <p>La capital de Francia es <?php  echo $capitales[1]; ?></p>
        <p>La capital de Inglaterra es <?php  echo $capitales[2]; ?></p>
        <p>La capital de Alemania es <?php  echo $capitales[3]; ?></p>
        
        <!---------------------------------------------------------------------->
        
        <h2>Pintar popr pantalla el contenido de un array</h2>
<!--        No se puede pintar el contenido de un array con el constructor de lenguaje echo()-->
        <?php
        //Funcion var_dump($var_array)=imprimer por pantalla el contenido del array, devolviendo información sobre el número de elementos que contiene, tipo de datos que contiene, longitud de caracteres de cada uno de los valores y la sintaxis "clave"=>"valor"
        //Función print_r($var_array)=imprime el contenido del array, devolviendo únicamento la sintaxis "clave"=>"valor"
        
        var_dump($capitales);
        print_r($capitales);
        ?>
        <!----------------------------------------------------------------------------------------------->
        
        <h2>Práctica</h2>
        
        <?php
        //Los $usuarios de mi plataforma son Elena, María y Paco
        $usuarios = array("elena","maría","paco");
        
        //=
                
        $usuarios[0]=ucfirst($usuarios[0]);
        $usuarios[1]=ucfirst($usuarios[1]);
        $usuarios[2]=ucfirst($usuarios[2]);
        
        var_dump($usuarios);

        ?>
        
        <p>Los <?php echo '$usuarios'?> de mi plataforma son <?php echo " ".$usuarios[0];echo " ".$usuarios[1];echo " ".$usuarios[2]?> </p>
        
    </body>
</html>

