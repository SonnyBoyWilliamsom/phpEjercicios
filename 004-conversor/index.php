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
        <form action="conversor.php" method="get">
            Quantity <input type="number" value="1" name="quantity" min="0" required>*
            <br>
            From
            <select name="origen">
                <option value="euro">Euro-EUR</option>
                <option value="dollar">Dollar-USD</option>
                <option value="pound">Pound-GPB</option>
            </select>
            to
            <select name="destino">
                <option value="euro">Euro-EUR</option>
                <option value="dollar">Dollar-USD</option>
                <option value="pound">Pound-GPB</option>
            </select>
            <br>
            <br>
            <input type="submit" name="formConversor" value="Send">
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
