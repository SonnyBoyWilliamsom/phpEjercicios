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
        <style>
            input, select, textarea{
                margin: 10px;
                padding: 5px;
                width: 250px;
                outline: none;

            }body{
                font-family: sans-serif;
                padding: 5%;
                text-align: center;
            }
            h1{
                color: tomato;
            }
            select{
                width: 265px;
            }
            form{
                width: 270px;
                margin: 0 auto; 
            }
           
            input[type="submit"]{
                border:none;
                padding: 20px;
                background: tomato;
                color:#fff;
               
            }
        </style>
    </head>
    <body>
        <h3><?=$_GET["msg"]?></h3>
        <h1>Enviar un nuevo mensaje</h1>
        
        <form action="gracias/" method="post">
            Destinatario: <input type="text"  name="nombre" placeholder="*Nombre" required><br>
            Correo Electrónico:<input type="email"  name="emailUser" placeholder="*Email" required><br>
            <textarea name="consulta" placeholder="Mensaje?" rows="10" cols="70"></textarea><br>
            <input type="submit"  name="nuevoMensaje" value="Envíanos tu consulta" required><br>
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
