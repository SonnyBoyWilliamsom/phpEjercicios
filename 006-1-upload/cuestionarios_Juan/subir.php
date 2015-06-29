<?php
      if($_GET["cuestionario"]){
         
          extract($_GET);
          for($i=0;$i<2;$i++){
                $pregunta="pre".($i+1);
                
                if(empty($_GET[$pregunta])){
                    echo 'No has respondido la pregunta '.($i+1).'<br>';
            }
          }
      }else{
          echo 'NADA';
      }
        ?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cuestionario Tema 12</h1>
        <p><span class="videoTutorial">Videotutorial: 12B1Comparaciones4.avi</span>
            <br>
            Con el archivo <i>Factores.sav</i> se muestra como se obtienen las comparaciones múltiples de la respuesta <i>Presión arterial media</i> entre las categorías de la variable predictora <i>Nivel de tabaquismo Nulo/Medio/Alto</i> por los procedimientos de <strong>DMS, Bonferroni, Tukey, Scheffé</strong> y <strong>Dunnet</strong> con el cuadro <i>ANOVA</i> de un factor.
        </p>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get" enctype="multipart/form-data">
            <label><strong>Pregunta1</strong></label>
            <p>En la unidad 11B se ha analizado la relación entre la respuesta <i>Presión arterial media</i> y de la exposición <i>Nivel de tabaquismo Nulo/Medio/Alto</i> obteniendo una p < 0,001 po la prueba de Kruskall-Wallis. Señale la conclusión más correcta de este análisis.</p>
          
            a.<input type="radio" name="pre1" value="p1a">
            b.<input type="radio" name="pre1" value="p1b">
            c.<input type="radio" name="pre1" value="p1c">
            d.<input type="radio" name="pre1" value="p1d">
            
            <br>
            
            <label><strong>Pregunta2</strong></label>
            <p>En la unidad 11C se ha analizado la relación entre la respuesta <i>Presión arterial media</i> y de la exposición <i>Nivel de tabaquismo Nulo/Alto</i> obteniendo una p < 0,1 po la prueba de Kruskall-Wallis. Señale la conclusión más correcta de este análisis.</p>
          
           a.<input type="radio" name="pre2" value="p2a">
           b.<input type="radio" name="pre2" value="p2b">
           c.<input type="radio" name="pre2" value="p2c">
           d.<input type="radio" name="pre2" value="p2d">
           <br>
          
           
           <input type="submit" name="cuestionario" value="Enviar">
        </form>
        
       
    </body>
</html>
