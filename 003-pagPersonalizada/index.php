<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="validation.php" method="post">
            Nombre<input type="text" name="nameUser" required autofocus>
            <br>
            Color Fondo<input type="color" name="bgColor" value="#dddddd">
            <br>
            <textarea type="text" name="textUser" >Text Área</textarea>
            <br>
            Color Texto<input type="color" name="textColor" value="#dddddd">
            <input type="submit" value="send">
        </form>
       
    </body>
</html>
