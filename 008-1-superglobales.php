<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Formulario ejecutado en el fichero externo con método get</h2>
        
        <form action="008-2-superglobalesGET.php" method="get">
            <input type="text" name="nameUser" placeholder="Name" required>*<br>
            <input type="text" name="surnameUser" placeholder="Surname" required>*<br>
            <input type="email" name="emailUser" placeholder="example@server.com" required>*<br>
            <input type="text" name="phoneUser" value="+34"><br>
           
            <input type="submit" value="Send">
        </form>
        
        <h2>Formulario ejecutado en el fichero externo con método get y tratado con _REQUEST</get>
        
        <form action="008-3superglobalesREQUEST.php" method="get">
            <input type="text" name="nameUser" placeholder="Name" required>*<br>
            <input type="text" name="surnameUser" placeholder="Surname" required>*<br>
            <input type="email" name="emailUser" placeholder="example@server.com" required>*<br>
            <input type="text" name="phoneUser" value="+34"><br>
           
            <input type="submit" value="Send">
        </form>
            
        <h2>Formulario ejecutado en el mismo documento</h2>
        
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <input type="text" name="nameUser" placeholder="Name" required>*<br>
            <input type="text" name="surnameUser" placeholder="Surname" required>*<br>
            <input type="email" name="emailUser" placeholder="example@server.com" required>*<br>
            <input type="text" name="phoneUser" value="+34"><br>
           
            <input type="submit" value="Send">
        </form>
           
        <p>Buenos días <b><?php echo $_REQUEST["nameUser"]?></b></p>
        <p>Tus datos personales son:</p>
        <p>Apellido: <b><?php echo $_REQUEST["surnameUser"]?></b></p>
        <p>Telefono: <b><?php echo $_REQUEST["emailUser"]?></b></p>
        <p>Apellido: <b><?php echo $_REQUEST["phoneUser"]?></b></p>
        
        <a href="008-1-superglobales.php"><button>Back</button></a>
            <?php
        //$_SERVER=contiene información  sobre rutas        
        //$_GET=recoge los valores de un formulario enviado con el método Get
        //$_POST=recoge los valores de un formulario enviado con el método Post
        //$_REQUEST=recoge los valores de un formulario enviado independientemente  del método de envío
        //Estos array asociativos tienen como claves los "name" de los <input>
        
        ?>
        
        <hr>
        <hr>
        
        <h2>Formulario ejecutado en el fichero externo con método post</h2>
        
        <form action="008-4-superglobalesPOST.php" method="post">
            <input type="text" name="nameUser" placeholder="Name" required>*<br>
            <input type="text" name="surnameUser" placeholder="Surname" required>*<br>
            <input type="email" name="surnameUser" placeholder="example@server.com" required>*<br>
            <input type="text" name="phoneUser" value="+34"><br>
           
            <input type="submit" value="Send">
        </form>
        
        <h2>Formulario ejecutado en el fichero externo con método post y  tratado con _REQUEST</h2>
        
        <form action="008-3superglobalesREQUEST.php" method="post">
            <input type="text" name="nameUser" placeholder="Name" required>*<br>
            <input type="text" name="surnameUser" placeholder="Surname" required>*<br>
            <input type="email" name="emailUser" placeholder="example@server.com" required>*<br>
            <input type="text" name="phoneUser" value="+34"><br>
           
            <input type="submit" value="Send">
        </form>
        
        <h2>Formulario ejecutado en propio ficherp con método post</h2>
        
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <input type="text" name="nameUser" placeholder="Name" required>*<br>
            <input type="text" name="surnameUser" placeholder="Surname" required>*<br>
            <input type="email" name="emailUser" placeholder="example@server.com" required>*<br>
            <input type="text" name="phoneUser" value="+34"><br>
           
            <input type="submit" value="Send">
        </form>
         <p>Buenos días <b><?php echo $_REQUEST["nameUser"]?></b></p>
        <p>Tus datos personales son:</p>
        <p>Apellido: <b><?php echo $_REQUEST["surnameUser"]?></b></p>
        <p>Telefono: <b><?php echo $_REQUEST["emailUser"]?></b></p>
        <p>Apellido: <b><?php echo $_REQUEST["phoneUser"]?></b></p>
         
        <a href="008-1-superglobales.php"><button>Back</button></a>
           
    </body>
</html>
