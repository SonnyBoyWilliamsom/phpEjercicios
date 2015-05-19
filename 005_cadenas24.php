<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Longitud de cadenas de texto</h2>
        <?php
        //Función strlen($var_name) = devuelve el número de caracteres que tiene un string
        echo strlen("Hola Elena")."<br>";
        
        $texto="Hola Elena";
        echo strlen($texto)."<br>";
        
        $length=strlen($texto);
        echo "$texto tiene $length caracteres";        
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Longitud de cadena de textos con caracteres especiales</h2>
        <?php
        //Función mb_strlen($var_name,encoding) = devuelve el número de caracteres incluyendo los caracteres especiales 
        echo mb_strlen("Hola Tomás","UTF-8")."<br>";
        
        $texto="Hola Tomás";
        echo mb_strlen($texto,"UTF-8")."<br>";
        
        $length=mb_strlen($texto,"UTF-8");
        echo "$texto tiene $length caracteres";
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Número de palabras de una cadena</h2>
        <?php
        //Función str_word_count($var_name) = devuelve el número de palabras que componen una cadena de texto
        echo str_word_count("Hola soy Elena")."<br>";
        
        $texto="Hola soy Elena";
        echo str_word_count($texto)."<br>";
        
        echo $texto." tiene ".str_word_count($texto)." palabras<br>";
        
        //Las comillas exteriores prevalecen sobre las interiores
        $length=  str_word_count($texto);
        echo "'$texto' tiene $length palabras<br>";        
        echo '"$texto" tiene $length palabras<br>';        
        echo "\"$texto\" tiene $length palabras<br>";   
        
        //str_word_count($var_name,0,caracteres especiales) = pasamos más parámetros de entrada a la función si la cadena de texto a contabilizar contiene caracteres especiales
        $texto="Los 10 mandamientos";
        echo str_word_count($texto,0,"0123456789")."<br>";
        
        $texto="tengo un á rbol";
        echo str_word_count($texto,0,"áéíóúÁÉÍÓÚÑñ0123456789");        
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Convertir texto en mayúsculas</h2>
        <?php
        //Función mb_strtoupper($var_name,encoding) = función que devuelve la cadena de texto convertida a mayúsculas
        echo strtoupper("este texto lo quiero en mayúsculas")."<br>";
        //Función multibyte "mb_" (permite pasar el encoding cómo parámetro de entrada)
        echo mb_strtoupper("este texto lo quiero en mayúsculas","UTF-8")."<br>";
        
        $texto="este texto lo quiero en mayúsculas";
        echo mb_strtoupper($texto,"UTF-8")."<br>";
        
        $txt_may = mb_strtoupper($texto,"UTF-8");
        echo $txt_may;
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Convertir texto en minúscula</h2>
        <?php
        //Función mb_strtolower($var_name,encoding) =función que devuelve la cadena de texto convertida a minúsulas
        echo mb_strtolower($txt_may,"UTF-8")."<br>";
        
        $txt_min=mb_strtolower($txt_may,"UTF-8");
        echo $txt_min;
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Convertir primera letra de la oración en may</h2>
        <?php
        //Función ucfirst($var_name) = función que devuelve la oración con la primera letra en mayúsculas. No permite el encoding por tanto tendremos problemas con los caracteres especiales.
        echo ucfirst("primera letra de la oración en may")."<br>";
        
        $texto="primera letra de la oración en may";
        echo ucfirst($texto)."<br>";
        
        $texto="pRimeRa leTra de La orAción en MAy";
        echo ucfirst(mb_strtolower($texto,"UTF-8"));
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Convertir la primera letra de cada palabra en may</h2>
        <?php
        //Función ucwords($var_name) =  función que devuelve la oración con la primera letra de cada palabra en mayúsculas. No permite el encoding por tanto tendremos problemas con los caracteres especiales.
        $texto="pRimeRa leTra de caDa paLabrA en MAy";
        echo ucwords(mb_strtolower($texto,"UTF-8"));
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Conversión en función de método</h2>
        <?php
        //Función mb_convert_case($var_name,método,encoding) = según el método que le especifiquemos a la función realiza una converisón u otra. Dispone de tres método posibles (MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE) que equiparan a las funciones mb_strtoupper, mb_strtolower, ucwords
        $texto="tengo un árbol en mi jardín";
        
        $txt_may = mb_convert_case($texto, MB_CASE_UPPER, "UTF-8");
        echo $txt_may."<br>";
        
        echo mb_convert_case($txt_may,MB_CASE_LOWER,"UTF-8")."<br>";
        echo mb_convert_case($texto, MB_CASE_TITLE,"UTF-8");
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Cortar string y concatenar funciones</h2>
        <?php
        //Función mb_substr($var_name, start pos, lenght-cantidad, encoding) = devuelve una parte de la cadena (substrings)
        $texto="árbol verde"; //Árbol verde
        /////////////////////////
        $first_letter= mb_substr($texto, 0,1, "UTF-8"); //á
        $first_letter_may = mb_strtoupper($first_letter,"UTF-8");//Á        
        $rest_text = mb_substr($texto, 1, mb_strlen($texto,"UTF-8")-1, "UTF-8");
        
        echo $first_letter_may.$rest_text."<br>";
        //////////////////////////
        echo mb_strtoupper(mb_substr($texto, 0,1, "UTF-8"),"UTF-8").mb_substr($texto, 1, mb_strlen($texto,"UTF-8")-1, "UTF-8")."<br>";      
        ?>        
        <!------------------------------------------------------------>
        <?php 
        $texto="áRbol VerDe en Mi jarDíN"; //Árbol verde en mi jardín
        
        echo mb_strtoupper(mb_substr($texto,0,1,"UTF-8"),"UTF-8").mb_strtolower( mb_substr($texto,1,  mb_strlen($texto,"UTF-8")-1,"UTF-8"),"UTF-8");
        ?>
        
        <!--------------------------------------------------------------------->
        
        <h2>Quitar espacios o caracteres al inicio o final de una cadena</h2>            <?php
        //Función trim($var_name, caracter a eliminar) = elimina los caracteres buscados del principio y final de la cadena, sino indico caracter por defecto elimina los espacios
        //Función rtrim($var_name, caracter a eliminar) = elimina los caracteres buscados del final (right) de la cadena, sino indico caracter por defecto elimina los espacios
        //Función ltrim($var_name, caracter a eliminar) = elimina los caracteres buscados del principio (left) de la cadena, si no indico caracter por defecto elimina los espacios
        
        $texto=" elena@cice.es ";
        $texto=trim($texto);
        echo mb_strlen($texto,"UTF-8")."<br>";
        ////////
        echo mb_strlen(trim($texto),"UTF-8")."<br>";
        ////////
        $texto="* */-Hol-a**/";
        echo trim($texto,"*/- ")."<br>";
        echo rtrim($texto,"*/-")."<br>";
        echo ltrim($texto,"*/-")."<br>";       
        ?>
        
        <!------------------------------------------------------------------------------->
        
        <h2>Buscar y remplazar</h2>
        <?php
        //Función str_replace(palabra a buscar, palabra de reemplazo, $var_name) = devuelve la cadena de texto modificada
        //Función str_ireplace(palabra a buscar, palabra de reemplazo, $var_name) -> no es sensible al uso de may o min
        
        $texto="Debo comer más Helado para estar sano";
        //busca coincidencia exacta
        echo str_replace("helado", "verdura", $texto)."<br>";
        //le da igual si esta en may o min que la modifica
        echo str_ireplace("helado", "verdura", $texto)."<br>"; 
        
        //////////////////////////
        $texto = "Tengo una oración con palabras malsonantes del tipo tonto, bobo, FEO";
        $listado_palabras= array("tonto","feo","bobo");
        echo str_ireplace($listado_palabras, "***", $texto)."<br>";
        
        
        //////////////////////////Práctica        
        $texto=" 1 2 3 4 5 6 7 8 9 "; //1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9
        
        echo trim(str_replace(" ", " - ", $texto)," -");
        ?>
        
        <!------------------------------------------------------------>
        
        <h2>Devolver una subcadena</h2>
        <?php
        //Función strchr($var_name, elemento a buscar desde la izq) = devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la izquierda (incluído éste)
        //Función strrchr($var_name, elemento a buscar desde la dch) = devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la derecha (incluído éste)
        
        $fichero="foto.gatito.bonito.jpg";
        
        echo strchr($fichero,".")."<br>";
        echo strrchr($fichero,".")."<br>";
        
        echo ltrim(strrchr($fichero,"."),".")."<br>";
        ?>
        
    </body>
</html>





