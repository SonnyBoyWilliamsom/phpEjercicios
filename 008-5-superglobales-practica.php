<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Prueba Suerte</h2>
        <fieldset>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="text" name="nameUser1" placeholder="Name Player1" required>*<br>
            <input type="text" name="nameUser2" placeholder="Name Player2" required>*<br>
            <input type="text" name="nameUser3" placeholder="Name Player3" required>*<br>
          
            <input type="submit" value="Send">
        </form>
        </fieldset>
            <h3>El ganador es: <?php echo $_POST[array_rand($_POST)];?></h3>
    </body>
</html>
