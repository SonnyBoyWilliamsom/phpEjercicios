<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        var_dump($_REQUEST);
        ?>
        <p>Buenos días <b><?php echo $_REQUEST["nameUser"]?></b></p>
        <p>Tus datos personales son:</p>
        <p>Apellido: <b><?php echo $_REQUEST["surnameUser"]?></b></p>
        <p>Telefono: <b><?php echo $_REQUEST["emailUser"]?></b></p>
        <p>Apellido: <b><?php echo $_REQUEST["phoneUser"]?></b></p>
        
        <a href="008-1-superglobales.php"><button>Back</button></a>
    </body>
</html>
