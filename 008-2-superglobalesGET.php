<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        var_dump($_GET);
        ?>
        <p>Buenos días <b><?php echo $_GET["nameUser"]?></b></p>
        <p>Tus datos personales son:</p>
        <p>Apellido: <b><?php echo $_GET["surnameUser"]?></b></p>
        <p>Telefono: <b><?php echo $_GET["emailUser"]?></b></p>
        <p>Apellido: <b><?php echo $_GET["phoneUser"]?></b></p>
        
        <a href="008-1-superglobales.php"><button>Back</button></a>
    </body>
</html>
