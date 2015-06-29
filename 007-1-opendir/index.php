<?php
//Abrimos la carpeta que queremos leer -> opendir(carpeta)
$directorio=opendir("img/");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <!--Función readdir($directorio) = Función que devuelve los nombres de los fichero almacenados en la carpeta previamente abierta con opendir(). Esta lectura se realiza en el orden en el que fueron almacenados por el sistema de ficheros (alfabeticamente).-->
            <?php 
            
            while($nameArchivo = readdir($directorio)){ 
                echo "sdfmowdfno";
                if(substr($nameArchivo,0,1) != "." ){ ?>
                    <img src="img/<?=$nameArchivo?>" width="200">
                <?php } ?>
            <?php } ?>
        
        <!--Cerramos el directorio previamente abierto-->
        <?php closedir($directorio) ?>
        
    </body>
</html>
