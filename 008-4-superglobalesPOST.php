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
        <?php
        var_dump($_POST)
        ?>
        
        <p>Buenos días <b><?php echo $_POST["nameUser"] ?></b></p>
        <p>Tus datos personales son:</p>
        <p>Apellido: <?php echo $_POST["surnameUser"] ?></p>
        <p>Email: <?php echo $_POST["emailUser"] ?></p>
        <p>Telefono <?php echo $_POST["phoneUser"] ?></p>
        
    </body>
</html>
