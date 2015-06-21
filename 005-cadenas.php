<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Longitud de cadenas de texto</h2>
        
        <?php
        // Función strlen($var_name)=devuelve el número de caracteres que contiene un string
        echo strlen("Holaquetalamigo")."<br>";
        
        $frase = "Hola que tál amigo";
        echo strlen($frase)."<br>";
        
        $longitud = strlen($frase);
        echo "$frase tiene $longitud caracteres";
        ?>
        
        <!------------------------------------------->
        
        <h2>Longitud de cadena de textos con caracteres especiales</h2>
        <?php 
        //Función mb_strlen($var_name, encoding)= devuelve el número de caracteres incluyendo los caracteres especiales
        echo mb_strlen("Hola Tomás Ñoño", "UTF-8")."<br>";
        $frase = "Hola Tomás Ñoño";
        echo mb_strlen($frase,"UTF-8")."<br>";
        $longitud =  mb_strlen($frase,"UTF-8");
        echo "$frase tiene $longitud caracteres"."<br>";
         
        ?>
         <!------------------------------------------->
         <h2>Número de palabras que comopne una cadena de texto</h2>
         <?php
         //Función str_word_count($var_name)=devuelve el número de palabras que componen una cadena de texto sin contar números o caráteres especiales
         echo str_word_count("Hola que tal amigo?")."<br>";
         $texto = "Hola soy Wairo Pairo";
         echo str_word_count($texto)."<br>";
         $longitud=str_word_count($texto);
         echo "$texto tiene  $longitud palabras <br>";
         //Las comillas exteriores prevalecen sobre las interiores
         echo "\"$texto\"<br>";
         echo "'$texto'<br>";
         ////Función str_word_count($var_name,0,caracteres especiales)=pasamos más párametros de entrada a la función si la cadena de texto a contabilizar contiene carácteres especiales
         $texto = "árbol verde";
         echo str_word_count($texto,0,"0123456789á")."<br>";
         
         ?>         
         <!------------------------------------------->        
          <h2>Convertir texto en mayúsculas</h2>
          <?php
//          Función mb_strtoupper($var_name, encoding)=función que devuelve la cadena de texto convertida a mayúsculas
          echo mb_strtoupper("este texto lo quiero convertir en mayúsculas","UTF-8")."<br>";
          $texto = "este texto lo quiero convertir en mayúsculas";
          $may = mb_strtoupper($texto,"UTF-8");
          echo $may;
          ?>
        <!------------------------------------------->        
          <h2>Convertir texto en minúscula</h2>
          <?php
          //Función mb_strtolower($var_name, encoding)=función que devuelve la cadena de texto convertida a minusculas
          $min = mb_strtolower($may,"UTF-8").'<br>';
          echo $min;
          ?>
         <!------------------------------------------->        
          <h2>Convertir la primera letra en mayúsculas</h2>  
          <?php
          //Función ucfirst($var_name)=función que devuelve la oración con la primera letra en mayúsculas. No permite el encoding
          
          echo ucfirst("primera letra en mayúscula").'<br>';
          $texto="primera letra de la oración en may";
          echo ucfirst(mb_strtolower($texto,"UTF-8"));
          
          ?>    
        <!------------------------------------------->        
          <h2>Convertir la primera letra de cada palabra</h2>  
          <?php
          //Función ucfirst($var_name)=función que devuelve la oración con la primera letra de cada palabra en mayúsculas. No permite el encoding
          $texto = "priMera LetRa dE la oRaCIón en mAy";
          echo ucwords(mb_strtolower($texto,"UTF-8"));
          ?>
        <!------------------------------------------->        
          <h2>Conversión en función de método</h2>  
          <?php
          //Función mb_convert_case($vas_name, método, encoding)=según el método que le especifiquemos a la función realiza una conversión u otra. Dispone de tres métodos posibles (MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE) que equiparan a las funciones que hemos visto antes
          $texto = "áengo un árbol en mi jardín";
          $a = mb_convert_case($texto, MB_CASE_UPPER, "UTF-8");
          $b = mb_convert_case($a, MB_CASE_LOWER, "UTF-8");
          $c = mb_convert_case($a, MB_CASE_TITLE, "UTF-8");
          echo $a.'<br>';
          echo $b.'<br>';
          echo $c.'<br>';
          
          ?>
           <!------------------------------------------->        
           <h2>Cortar string y concatenar funciones</h2>
           <?php
           //Función mb_substr
           $texto = "árbol verde bonico bonico"; //Salida del programa: Árbol verde
           
           echo mb_strtoupper(mb_substr($texto,0,1,"UTF-8"),"UTF-8").mb_substr($texto, 2);//Si en mb_substr($texto, 2) le añadimos la codificación "UTF-8" interpretará la tílde, luego quedaría mb_substr($texto, 1, NULL, --). Hay que añadirle también NULL, que indíca que la extracción de la cadena se hace hasta el final del texto de la vaiable tratada. Una alternativa a NULL es usando la función mb_strlen()
           ?>
           <!---------------------------------------------------------->        
           <h2>Ejercicios</h2>
           <?php
           
               $texto = "áRbol VerDe en Mi jarDíN"; //Salida del programa: Árbol verde
               echo $texto.':<br>';
               echo mb_strtoupper(mb_substr($texto,0,1,"UTF-8"),"UTF-8").mb_strtolower(mb_substr($texto, 2), "UTF-8");
          
               ?>
           
            <!---------------------------------------------------------->        
           <h2>Quitar espacions o caracteres al inicio o final de una cadena</h2>
           <?php
           //Función trim($var_name, caracter a eliminar) = elimina los caracteres buscados en el principio y final de la cadena
           //Función rtrim($var_name, caracter a eliminar) = elimina los caracteres buscados desde la derecha (o final)
           //Función ltrim($var_name, caracter a eliminar) = elimina los caracteres buscados desde la izquierda(o principio)
           $texto="**/-Hol-a**/";
           
           echo mb_substr(trim($texto,"-*/ "),0,3).trim(mb_substr(trim($texto,"-*/"),3),"-");
           
           ?>
           
            <!---------------------------------------------------------->        
           <h2>Buscar y remplazar</h2>
           <?php
           //Función str_replace(palabra buscada, palabra reemplazo, $var_name)=devuelve la cadena de texto modificada
           //Función str_ireplace(palabra buscada, palabra reemplazo, $var_name) -> no es sensible al uso de mayúsculas o minúsculas
           $texto="Debo comer más Helado para estar más sano";
           echo str_ireplace("helado","verdura", $texto)."<br>";
           
           $texto=" 1 2 3 4 5 6 7 8 9 ";
           echo trim(str_ireplace(" "," - ", $texto)," - ");
           
           ?>
           
           <!---------------------------------------------------------->        
           <h2>Devolver una subcadena</h2>
           <?php
           //Función strchr($var_name, elemento a buscar desde la izquierda)=devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encantrado desde la izquierda (incluyéndolo)
           //Función strrchr($var_name, elemento a buscar desde la derecha)=devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encantrado desde la derecha (incluyéndolo)
           $fichero="Jairo.Wairo_Mairo.Sairo.jpg";
           echo $fichero."<br>";
           echo strrchr($fichero, ".")."<br>";
           echo ltrim(strrchr($fichero, "."),".")."<br>";
           ?>
           
    </body>
</html>
