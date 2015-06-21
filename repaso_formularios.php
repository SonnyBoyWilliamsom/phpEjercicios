<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repaso</title>
        
        <style>
            *{margin: 0; padding: 0;}
            body{
                color: #009999;
                font-family: sans-serif;
                background: #eeffee;
               
            }
            header{
                background: #ccffcc;
                padding: 20px;
                color: #009999;
                text-align: center;
            }
            main{
                padding: 50px;
                width:300px; 
                margin:0 auto;
            }
            fieldset{
                margin-top:30px; 
               
            }
            form{
                padding: 30px;
            }
            .formFields{
                min-width: 100px;
                float: left;
            }
            .enviar{
                 padding-top: 15px;
                 text-align: right;
            }
            .formularios{
                max-width: 300px;
                
            }
            .respuestas{
                max-width: 300px;
                text-align: center;
                
            }
            .centrado{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header><h1>Formularios y variables superglobales</h1></header>
        <main>
            
            <div class="formularios">
                <fieldset>
                    <legend>Tratado con un fichero externo</legend>
                    <form action="procesosForm.php" method="GET">
                        <div class="formFields"><label>-Name:</label></div>
                        <input type="text" name="userName"  required autofocus>*<br>
                        <div class="formFields"><label>-Surname:</label></div>
                        <input type="text" name="userSurname" ><br>
                        <div class="formFields"><label>-Email:</label></div>
                        <input type="email" name="userEmail" placeholder="example@exmpl.com"  required>*<br>
                        <div class="formFields"><label>-Phone:</label></div>
                        <input type="text" name="userPhone" value="+34"><br>
                        <div class="enviar">
                            <input type="submit" value="Send" name="form1"></div>
                    </form>
                </fieldset>
                        </div>
            <!--------------------------------------------------------------------------------------------------->
                <div class="formularios">
                <fieldset>
                    <legend>Tratado con el mismo fichero</legend>
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                        <div class="formFields"><label>-Name:</label></div>
                        <input type="text" name="userNamef2"  autofocus>*<br>
                        
                        <div class="formFields"><label>-Email:</label></div>
                        <input type="email" name="userEmailf2" placeholder="example@exmpl.com" >*<br>
                        
                        <div class="enviar">
                            <input type="submit" value="Send" name="form2"></div>
                    </form>
                </fieldset>
                </div>
             <div class="respuestas">
                <?php

                if(isset($_POST["form2"])){
                extract($_POST);
                if(empty($userNamef2) && !empty($userEmailf2)){ ?>
                    <p>Enter name please!</p>
                   
                <?php }else if(!empty($userNamef2) && empty($userEmailf2)){ ?>
                     <p>Enter email please!</p>
                
                <?php }else if(empty($userNamef2) && empty($userEmailf2)){ ?>
                     <p>Fill the form please!</p>
                
                <?php }else{ ?>
                     <p>Login Correct</p>
                <?php }
                } ?>
                </div>
            
            <!--------------------------------------------------------------------------------------------------->
                <div class="formularios">
                <fieldset>
                    <legend>Comprobar datos de entrada</legend>
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                        <div class="formFields"><label>-Name:</label></div>
                        <input type="text" name="userNamef3"  autofocus>*<br>
                        
                        <div class="formFields"><label>-Password:</label></div>
                        <input type="text" name="userPassf3"  >*<br>
                        <div class="formFields"><label>-Over 18:</label></div>
                        <input type="checkbox" name="userAgef3"  ><br>
                        
                        <div class="enviar">
                            <input type="submit" value="Send" name="form3"></div>
                    </form>
                </fieldset>
                </div>
                <?php 
                $user_perm=array("elena@cice.es","kike@cice.es"); 
                $pass_perm=array("0000","1234");
                
                if(isset($_POST["form3"])){
                    extract($_POST);
                    if(($userNamef3==$user_perm[0] && $userPassf3==$pass_perm[0])||($userNamef3==$user_perm[1] && $userPassf3==$pass_perm[1])){     
                        if(!$userAgef3){ ?> <p> You are under age! </p> 
                        <?php }else{ 
                            ?> <p> Login correct</p> <?php }
                        
                    }else{ ?>
                        <p>Login Incorrect</p>
                    <?php }
                }
                
                ?>
              
            
              <!--------------------------------------------------------------------------------------------------->
              <fieldset>
                  <legend>Validación de extensión</legend>
                  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="GET">
                    <div class="formFields"><label>-Archivo:</label></div>
                    <input type="text" name="archivo" placeholder="jpg extension">

                    <div class="enviar">
                              <input type="submit" value="Send" name="form4"></div>
                  </form>
              </fieldset>
              
              <?php  
              if(isset($_GET["form4"])){
                  extract($_GET);
                  $files_allowed=array("jpg","png","bpm");
                  $fileIn=ltrim(strrchr($archivo,"."),".");
                  if(in_array($fileIn, $files_allowed)){
                      
                     echo 'Correct file';
                      
                  }else{
                      echo 'Incorrect file';
                  }
                  
                  
              }
              
              ?>
            </main>
    </body>
</html>
