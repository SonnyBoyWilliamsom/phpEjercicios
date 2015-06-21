<?php 
//    
//      $msg="";
//    if($_GET["error"]==2){
//        $msg="Email you entered does not exist, please enter a new one.";
//    }else if($_GET["error"]==1){
//        $msg="The password you enterd is incorrect, please try again";
//    }
    if($_GET){
    extract($_GET); //$error
    switch($error){
        case 1:
            $msg="La pass no es correcta";
            break;
        case 2:
            $msg="El usuario no existe";
            break;
    }
}

?>
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
        <h1>Login</h1>
        <form action="location.php" method="post">
              <input type="text" name="emailUser" placeholder="Email" required>
              <input type="password" name="passUser"  placeholder="Password">
              
              <input type="submit" value="Login" name="formLogin" >
        </form>
        <br>
        <span style="color:red; font-family: sans-serif; background:rgba(0,0,0,.2);border-radius:3px;"><?= $msg ?></span>
    </body>
</html>
