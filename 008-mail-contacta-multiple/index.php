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
                padding-top: 10%;
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
        <h1>Envíanos tu consulta</h1>
        <form action="gracias/" method="post">
            <input type="text"  name="nombre" placeholder="*Nombre" required><br>
            <input type="text"  name="apellido" placeholder="*Apellidos" required><br>
            <input type="email"  name="emailUser" placeholder="*Email" required><br>
            <input type="number"  name="tlf" placeholder="*Teléfono" required><br>
            <select required multiple name="departamento[]" ><br>
                <option value="">*Departamento con el que desea contactar</option>´<!--Si queremos que la primera opcion del select sea no valida su value ha de ser vacío-->
                <option value="jairodavid.guerrero.vasquez@gmail.com">Secretaría</option>
                <option value="jairodavid.guerrero.vasquez@gmail.com">Dirección</option>
                <option value="jairodavid.guerrero.vasquez@gmail.com">Alumni</option>
                <option value="jairodavid.guerrero.vasquez@gmail.com">Masters</option>
            </select><br>
            <textarea name="consulta" placeholder="*¿En qué podemos ayudarte?" rows="10" cols="70"></textarea><br>
            <input type="submit"  name="form_contacto" value="Envíanos tu consulta" required><br>
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
