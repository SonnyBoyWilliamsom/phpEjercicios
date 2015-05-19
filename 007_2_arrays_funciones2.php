<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h2>Número de elementos que hay en un array</h2>
        <?php
        //Función count($var_array) = devuelve el número de elementos que hay en un array
        //A.asociativoffff
        $usuarios=array("u1"=>"Elena","u2"=>"Pablo","u3"=>"Luis");
        //A.tradicional
        $users=array("Elena","Pablo","Luis","Tomás");
        ?>
        
        <p>El número de elementos que tiene <?php echo '$usuarios' ?> es <?php echo count($usuarios) ?></p>
        <p>El número de elementos que tiene <?php echo '$users' ?> es <?php  echo count($users)?></p>
        
        <!------------------------------------------------------------------------>
        
        <h2>Crar un array a partir de un string</h2>
        <?php
        //Función explode(caracter de división, $string) = devuelve el array resultante de dividir la cadena de texto a partir del caracter buscado, es decir, divide una cadena de texto y crea un array con estos sub-textos
        $string= "oscarmontoto@cice.es/jairo@cice.es/carmen@cice.es/jesus@cice.es";
        $emails = explode("/",$string); //$emails=array("jairo@cice.es","carmen@cice...);
        var_dump($emails);
        ?>
        
        <!--Práctica------------------------>
        <p>El email de <?php echo $emails[0] ?> tiene <?php echo mb_strlen($emails[0],"UTF-8") ?> caracteres</p>        
        
        
        <!-------------------------------------------------------------------->
        
        <h2>Obtener el último elemento de un array</h2>
        
        <h3>Opción con función end()</h3>
        <?php
        //Función end($var_array) = devuelve el último elemento de un array
        $fichero="cice.fondo-escritorio.png"; //png
        $fichero_array=explode(".",$fichero);
        echo end($fichero_array);
        ?>
        <!---------------->
        <h3>Opción con función count() y strrchr()</h3>
        <?php
        $fichero="casa-blanca.jpg"; //jpg
        $fichero_array=explode(".",$fichero); //$fichero_array=array("casa-blanca","jpg");
        echo $fichero_array[1]."<br>";
        //////////
        $fichero="bonito.jpg"; //jpg
        //explode()+count()
        $fichero_array=explode(".",$fichero);
        echo $fichero_array[count($fichero_array)-1]."<br>";
        //strrchr()+ltrim()
        echo ltrim(strrchr($fichero,"."),".");
        ?>
        
        <!-------------------------------------------------------------------->
         
        <h2>Crear un string a partir de un array</h2> 
        <?php
        //Función implode(caracter de división,$var_array) = devuelve una cadena de texto creada a partir de los elementos de un array, separándolos por el caracter de división
        $emails=array("elena@cice.es","oscar@cice.es","jairo@cice.es","carmen@cice.es");
        
        $ultimo_elemento=end($emails);
        $num_letras_ultimo_elemento=mb_strlen($ultimo_elemento,"UTF-8");
        
        $string= implode(", ",$emails);   
        $num_letras_total=mb_strlen($string,"utf-8");
        
        //extraigo del string todas las letras - las letras que componen al último elemento, y luegio le concateno éste
        echo mb_substr($string, 0, $num_letras_total-($num_letras_ultimo_elemento+2),"utf-8")." y ".$ultimo_elemento;
        ?>
        
        <!--------------------------------------------------------------------->
        
        <h2>Crear variables a partir de las claves de una A.asociativo</h2>
        <?php
        //Función extract($var_array) = crea variables a partir de las claves de un array asociativo
        $user=array("nombre"=>"Elena","email"=>"elena@cice.es","dni"=>"789");
        extract($user); //$nombre="Elena"; $email="elena@cice.es";....
        ?>
        <p><?php echo $nombre ?> tiene el email <?php echo $email ?></p>
        
        <!--Práctica------------------------>
        <?php
        $obj=array("color"=>"azul","tamano"=>"medio","forma"=>"esferica");
        extract($obj);
        ?>
        <p>el <?php echo '$color' ?> de mi objeto es <?php echo $color ?> y su <?php echo '$forma' ?> es <?php echo $forma ?></p>
        
        <!------------------------------------------------------------------->
        
        <h2>Devolver un valor aleatorio de un array</h2>
        <?php
        //Funcion array_rand($var_array) = devuelve un número de posición aleatorio del array
        $nombres=array("Yolanda","Imanol","Julia");
        $num_pos=  array_rand($nombres); //[0,2]
        ?>
        <p>Le toca fregar los platos a <?php echo $nombres[$num_pos] ?></p>
        
        
    </body>
</html>
