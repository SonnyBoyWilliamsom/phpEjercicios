<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h1>Arrays</h1>
        <p>Listado o colección de datos. Asocia valores con claves o posiciones</p>
        
        <!------------------------------------------>
        
        <h2>Arrays asociativos</h2>
        <?php
        //A.asociativo = asocia valores con claves
        //Sintaxis: $var=array("clave"=>"valor","clave"=>"valor",.....);
        
        $capitales = array("España"=>"Madrid",
                            "Francia"=>"París",
                            "Inglaterra"=>"Londres",
                            "Alemania"=>"Berlín" );
        
        echo "La capital de España es ".$capitales["España"]."<br>";
        echo "La capital de Francia es ".$capitales["Francia"]."<br>";
        echo "La capital de Inglaterra es ".$capitales["Inglaterra"]."<br>";
        echo "La capital de Alemania es ".$capitales["Alemania"]."<br>";
        ?>        
        
        <p>La capital de España es <?php echo $capitales["España"]?></p>
        <p>La capital de Francia es <?php echo $capitales["Francia"]?></p>
        
        <!------------------------------------------------------------->
        
        <h2>Arrays Tradicionales</h2>
        <?php
        //A.tradicional = asocia valores con índices o posiciones
        //Sintaxis : $var = array("valor","valor",....);
        $capitales = array("Madrid","París","Londres","Berlín");
        ?>
        
        <p>La capital de España es <?php echo $capitales[0] ?></p>
        <p>La capital de Francia es <?php echo $capitales[1] ?></p>
        <p>La capital de Inglaterra es <?php echo $capitales[2] ?></p>
        <p>La capital de Alemania es <?php echo $capitales[3] ?></p>
        
        <!------------------------------------------------------------->
        
        <h2>Pintar por pantalla el contenido de un array</h2>
        <?php
        //no podemos pintar el contenido de una array con el constructor de lenguaje echo
        //echo $capitales;
        
        //Función var_dump($var_array) = imprime por pantalla el contenido del array, devolviendo información sobre el número de elementos que contiene, tipo de datos que contiene, longitud de caracteres de cada uno de los valores y la sintaxis "clave"=>"valor"
        var_dump($capitales);
        
        //Función print_r($var_array) = imprime por pantalla el contenido del array, devolviendo únicamente la sintaxis "clave"=>"valor"
        print_r($capitales);
        ?>
        
        <!-------------------------------------------------------------->
        
        <h2>Práctica</h2>
        <?php
        $usuarios = array("elena","maría","paco"); 
        //Los $usuarios de mi plataforma son Elena, María y Paco
        ?>
        <p>Los <?php echo '$usuarios' ?> de mi plataforma son <?php echo ucfirst($usuarios[0]) ?>, <?php echo ucfirst($usuarios[1]) ?> y <?php echo ucfirst($usuarios[2]) ?></p>
        
        
    </body>
</html>







