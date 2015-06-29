<?php
//Abrimos la carpeta que queremos leer -> opendir(carpeta)
$directorio=opendir("upload/");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <!--Función readdir($directorio) = Función que devuelve los nombres de los fichero almacenados en la carpeta previamente abierta con opendir(). Esta lectura se realiza en el orden en el que fueron almacenados por el sistema de ficheros (alfabeticamente).-->
        <div id="galeria">
           <?php 
            $position=0;
            while($nameArchivo = readdir($directorio)){ 
              echo $nameArchivo;
              echo $position;
                if(substr($nameArchivo,0,1) != "." ){ ?>
                    
                    <a href="watch.php?position=<?=$position?>">
                <img src="upload/<?=$nameArchivo?>" width="200">
            </a>
                <?php $position++; } ?>
            <?php } ?>
        
        <!--Cerramos el directorio previamente abierto-->
        <?php closedir($directorio) ?>
        </div>
        <section id="watch">
           <a href="index.php">Subir Archivo</a>
        </section>
         
    </body>
</html>
