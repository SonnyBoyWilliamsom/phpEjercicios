<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
        <h2>Validación de campos de un formulario</h2>
        
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label>Email</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="pass">
            
            <input type="submit" value="Entrar">
        </form>
        
        <?php
        //Al ejecutar el ejercicio por primera vez no se ha enviado información, por tanto no llega ninguna información del método get, sólo cuando le damos a enviar, se vuelve a ejecutar el documento y se vuelve a preguntar si existe información procedente del formulario, cómo ahora si llegan datos, se cumple la condición del isset y se pregunta por si esos datos vienen vacios o no con empty
        if(isset($_GET["email"])){
            if( empty($_GET["email"]) || empty($_GET["pass"]) ){
                echo "Debes rellenar los datos";
            }else{
                echo "Login correcto";
            }
        }
        ?>
        
        <!---------------------------------------------------------------->
        
        <h2>Verificación de user y password</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            
            <input type="submit" value="Entrar">
        </form>
        <?php
        $user_perm=array("elena@cice.es","kike@cice.es");
        $pass_perm=array("0000","1234");
        
        extract($_POST);
        if($_POST){
            if( ( ($email==$user_perm[0]) && ($pass==$pass_perm[0]) ) || ( ($email==$user_perm[1]) && ($pass==$pass_perm[1]) ) ){
                echo "Login correcto";
            }else{
                echo "Usuario incorrecto";
            }
        }
        
        ?>
        
        <!-------------------------------------------------------------------------------->
        
        <h2>Formulario con checkbox</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="checkbox" name="edad">Soy mayor de edad
            <input type="submit" value="Entrar">
        </form>
        <?php
        //Debes indicar tu nombre
        //Eres menor de edad y no puedes pasar
        //Bienvenid@ Pablo
        if($_GET){
           
            extract($_GET);
            //echo empty($edad);
            if($edad=="on" && !empty($nombre)){//si se especifica edad y nombre
                echo 'Hola '.$nombre.'!!';
            }else if(($edad=="on" && empty($nombre)) || (empty ($edad)&& empty($nombre))){//si se especifica edad o no pero no nombre
                echo 'Debes indicar tu nombre';
            }else if(empty ($edad) && !empty($nombre)){
                echo 'Eres menor de edad, no puedes pasar!';
            }
        }
        ?>
        
        
    </body>
</html>
