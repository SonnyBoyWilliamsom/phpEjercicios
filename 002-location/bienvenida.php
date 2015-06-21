<?php 

$a = strlen($_GET["email"]) - strlen(strrchr($_GET["email"], "@"));?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bienvenida <?= ucfirst(substr($_GET["email"],0,$a)); ?> </h1>
    </body>
</html>
