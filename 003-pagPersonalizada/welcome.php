<?php

extract($_GET); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Colorress</title>
    </head>
    <body style=" width: 50%; background: <?= $backgroundColor ?>;color: <?= $textColor ?>">
        <h1>Hola <?= $nameUser ?>! Esto es lo que escribiste: </h1>
        <h3><?= $textUser ?></h3>
    </body>
</html>
