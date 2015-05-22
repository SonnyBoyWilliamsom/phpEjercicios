<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Validación de campos de un formulario</h2>
        <!--Formulario con campo email & password procesado por el mismo documento -->
        <fieldset>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
           
            <label>User email: </label>
            <input name="UserEmail" placeholder="email" type="email"><br><br>
            <label>Password: </label>
            <input name="UserPass" placeholder="Pass" type="text"><br><br>
            <input type="submit" value="Send">
            
        </form>
        </fieldset>
        <div>
            <?php
            if($_GET){
                extract($_GET);
                if( empty($UserEmail)&&!empty($UserPass)){
                    echo 'Please enter Email';

                }else if(empty($UserPass)&&!empty($UserEmail)){
                     echo 'Please enter Password';
                }else if(empty($UserPass)&& empty($UserEmail)){
                     echo 'Please fill the form';
                }
                else{
                     echo 'Login Correct';
                }
            }
            ?>
       </div>
        
         <h2>Verificación de campos de un formulario</h2>
        <!--Formulario con campo email & password procesado por el mismo documento -->
         <fieldset>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
           
            <label>User email: </label>
            <input name="UserEmail" placeholder="email" type="email" required>*<br><br>
            <label>Password: </label>
            <input name="UserPass" placeholder="Pass" type="text" required>*<br><br>
            <input type="submit" value="Send">
            
        </form>
             
        </fieldset>
        <div>
            <?php
            if($_POST){
                $user_perm=array("elena@cice.es","kike@cice.es"); 
                $pass_perm=array("0000","1234");
                extract($_POST);
                if(($UserEmail==$user_perm[0] && $UserPass==$pass_perm[0])||($UserEmail==$user_perm[1] && $UserPass==$pass_perm[1]) ){
                    echo 'Login Correct';
                }else{
                    echo 'Login Incorrect';
                }
           }
          
           ?>
       </div>
        <!-------------------------------------------------------------------------------->
        
        <h2>Formulario con checkbox</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="checkbox" name="edad">Soy mayor de edad
            <input type="submit" value="Entrar" name="form2">
        </form>
        <?php
        //Debes indicar tu nombre
        //Eres menor de edad y no puedes pasar
        //Bienvenid@ Pablo
        if(isset($_GET["form2"])){
           
            extract($_GET);
            //echo empty($edad);
            if(isset($edad) && !empty($nombre)){//si se especifica edad y nombre
                echo 'Hola '.$nombre.'!!';
            }else if(empty($nombre)){//si se especifica edad o no pero no nombre
                echo 'Debes indicar tu nombre';
            }else{
                echo 'Eres menor de edad, no puedes pasar!';
            }
        }
        ?>
        
        <!-------------------------------------------------------------------------------->
        
        <h2>Validación de extensión</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="text" name="archivo" placeholder="fichero">
           
            <input type="submit" value="Send" name="form3">
        </form>
        
        <?php
        //Función X = Devuelve true si el valor buscado se encuentra en el array
        $ext_perm=array("jpg","png");
        
        if(isset($_GET["form3"])){
        extract($_GET);
       // var_dump($_GET);
            if(in_array(ltrim(strrchr($archivo, "."),"."),$ext_perm)){
                echo 'FICHERO PERMITIDO';
            }else{
                echo 'FICHERO NO PERMITIDO';
            }
        }
        
//        //Otra manera con explode y end
//        if(isset($_GET["form3"])){
//        extract($_GET);
//        var_dump($_GET);
//        $a=explode( ".",$archivo);
//            if(in_array(end($a),$ext_perm)){
//                echo 'FICHERO PERMITIDO';
//            }else{
//                echo 'FICHERO NO PERMITIDO';
//            }
//        }
        
        
        ?>
        
        <!-------------------------------------------------------------------------------->
        
        <h2>Formulario con radiobutton</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="text" name="nombre" placeholder="Nombre" required>*
            <input type="number" name="edad" placeholder="edad" required>*
            <input type="radio" name="sexo" value="mujer" checked> F
            <input type="radio" name="sexo" value="hombre"> M
            
            <input type="submit" value="Send" name="form4">
        </form>
        
        <?php
        //Eres menor NOMBRE
        //Bienvenido/Bienvenida
        
        if(isset($_GET["form4"])){
            
            extract($_GET);
            $edadMax=18;
            if($edad<$edadMax){
                echo 'Eres menor '.$nombre;
                
            }else if($sexo=="mujer"){
                echo 'Bienvenida'.$nombre;
            }else{

                echo 'Bienvenido'.$nombre;
            }       
        }
        ?>
    </body>
</html>
