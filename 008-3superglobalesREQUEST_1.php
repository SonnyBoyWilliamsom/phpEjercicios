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
        
        <!----------------------------------------------------------------------------------------->
        
        <h2>Formulario con checkbox</h2>
        <fieldset>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
            <input name="nombre" placeholder="Nombre" type="text" ><br><br>
            <input name="edad"  type="checkbox" >Soy Mayor de edad<br><br>
            <input type="submit" value="Entrar">
            
        </form>
             
        </fieldset>
        
        <?php
         if(isset($_GET["nombre"])){
             echo 'eeeeeeeeeeeeeh';
            
         }else{
             echo 'Introduzca su nombre!!';
         }
                 
        ?>
    </body>
</html>
