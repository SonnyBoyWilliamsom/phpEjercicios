<?php session_start(); ?>
<?php 
if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=1;
}else{
    $_SESSION['contador']++;
}
var_dump($_SESSION);
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
        <h3>Contador de páginas vistas por el usuario en todas sus sesiones.</h3>
        <p>
            Desde que entraste has visto <?=$_SESSION['contador']?> veces esta página</p>
        </p>
        <?php
        // put your code here
        ?>
    </body>
</html>
