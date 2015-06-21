<?php
        if($_POST["form2"]){
            var_dump($_POST);
//            foreach ($_POST as $product => $quantity) {
//                if (!empty($quantity) && $quantity != "See Troley") {
//                   $products[$a]["product"] = $product;
//                    $products[$a]["quantity"] = $quantity;
//                    $a++;
//               }
            
//            }
            $arrayPrueba=array("hola","que","tal","amigo");
            $stringPrueba=implode($arrayPrueba);
            //header("location: verificacion.php?miArray=$stringPrueba");
        }
?>
        <?php
            if (isset($_POST["form1"])) {
          // var_dump($_POST);
            $compra = false;
            $a = 0;
            $products = array(array());
           ?>
            <div class="trolley">
                <h2>Trolley</h2>
                <ul>
                    <?php
                    foreach ($_POST as $product => $quantity) {
                        $quantity = (integer) $quantity;

                        if (!empty($quantity) && gettype($quantity) == "integer" && $product != "numberHouse" && $product != "postCode") {
                            ?>

                                <li> <span class="producto"> <?= $product ?> </span> : <span class="cantidad"> <?= $quantity ?> </span>
                                <?php $compra = true; ?></li>

                            <?php
                        }
                    }
                    if ($compra) {
                        echo '<br><form action="index.php" method="post">'
                                . '<input class="submit" type="submit" name="form2" value="Pay">' . '</form> ';
                        
                    }else{
                        echo 'No products selected!';
                    }
                    ?> 
                </ul>
           
            <?php
//            foreach ($_POST as $product => $quantity) {
//                if (!empty($quantity) && $quantity != "See Troley") {
//                    $products[$a]["product"] = $product;
//                    $products[$a]["quantity"] = $quantity;
//                    $a++;
//                }
//            }
//
//           
//
//            foreach ($products as $index => $productInfo) {
//                echo $productInfo["product"].": ".$productInfo["quantity"]."<br>";
//            }

            
            echo '</div>';
        }
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shop</title>
        <style>

            *{margin: 0; padding: 0; box-sizing: border-box;}

            html{height: 100%;}
            body{font-family: sans-serif; }
            h2{text-align: center;}
            
            /*Personal data Form and Trolley-------------------*/
            .datosCliente, .trolley{
                padding: 5%;
                background: rgba(85,85,85,.4);
                width: 40%;
                margin: 2% auto;
                border-radius: 5px;
                
                
            }
            .trolley ul{list-style-type: none; padding: 10px; text-align:center;}
            .producto{font-size: 1.2em; text-align: left;}
            /*Form Fields-------------------------------------*/

            input[type="text"],  input[type="email"], input[type="password"], input[type="number"], input[type="submit"]{
                color: #555;
                height: 50px;
                line-height:50px;
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                border: 2px solid #000;
                box-shadow: inset 1px 1px 3px rgba(0, 0, 0, .9);
                font:  1.1em sans-serif;
                border-radius: 5px;
            }

            input[type="text"].numberHouse, input[type="text"].postCode{ width: 50%; }
            input[type="submit"].submit{  font:  1em sans-serif; color: #000;  text-shadow: 0 0 0.5px rgba(0, 0, 0, .9);box-shadow: none;width: 35%; float: right; margin-top: -20px; cursor: pointer; padding:1%}
            input[type="submit"].submit:hover{ background: #fff;box-shadow: 2px 2px 5px rgba(0, 0, 0, .9); text-shadow: none;}
            .compraGeneral input[type="number"]{ text-align: center; font-size: 1.5em;}
/*            .cantidades input[type="number"]{  border-radius: 5px;width: 60%; float: right;}*/
            
            label{
                text-transform: uppercase;
                font-size: 1.2em;
                padding: 5px;
               
            }
            
            /*Store---------------------------------------------*/
            .compraGeneral{overflow: hidden;}
            .compra{
                width: 25%;
                float: left;
                padding: 2%;
                
            }
/*           .fruits{background: rgba(84,153,69,.5)}
            .dairy{background: rgba(14,62,115,.5);}
            .meat{background: rgba(251,67,59,.5);}
            .drinks{background: rgba(250,122,40,.5);*/

            /*Responsive----------------------------------------*/
            @media(max-width: 650px){
                
                .compraGeneral{width:60%; margin: 0 auto;}
                .compra{
                width: 100%;
                float: none;
                margin-top: 5%;
                }
                .datosCliente, .trolley{width:100%}
               
            
            }
        </style>
    </head>
    <body>
       
        <form action="<?=  $_SERVER["PHP_SELF"]?>" method="post">
            <div class="compraGeneral">
                
            <div class="compra fruits cantidades">
                <label>Banana</label><input type="number" name="bananas" min="0" placeholder="Kg">
                <label>Pear</label><input type="number" name="pear" min="0" placeholder="Kg">
                <label>Orange</label><input type="number" name="orange" min="0" placeholder="Kg">
                <label>Grape</label><input type="number" name="grape" min="0" placeholder="Kg">
            </div>
            <div class="compra dairy">
                <label>Egg</label><input type="number" name="egg" min="0" placeholder="Each">
                <label>Milk</label><input type="number" name="milk" min="0" placeholder="Liters">
                <label>Yogurt</label><input type="number" name="yogurt" min="0" placeholder="Each">
                <label>Cream</label><input type="number" name="cream" min="0" placeholder="Liters">
            </div>
            <div class="compra meat">
                <label>Chicken</label><input type="number" name="chicken" min="0" placeholder="Each"> 
                <label>Pork Fillet</label><input type="number" name="porkFillet" min="0" placeholder="Each"> 
                <label>Beef Steak</label><input type="number" name="beefSteak" min="0" placeholder="Each"> 
                <label>Burger</label><input type="number" name="burger" min="0" placeholder="Each"> 
            </div>
            <div class="compra drinks">
                <label>Coke</label><input type="number" name="Coke" min="0" placeholder="Each"> 
                <label>Fanta</label><input type="number" name="Fanta" min="0" placeholder="Each"> 
                <label>Juice</label><input type="number" name="OrangeJuice"  min="0" placeholder="Each"> 
                <label>Water</label><input type="number" name="Water" min="0" placeholder="Each"> 
            </div>
            </div>
            <div class="datosCliente">
                <input type="text" name="nameUser" placeholder="Name">
                <input type="email" name="emailUser" placeholder="example@domain.com">
                <input type="text" name="adressUser" placeholder="Street, Road, Ave., etc">
                <input class="numberHouse" type="text" name="numberHouse" placeholder="Number">
                <input class="postCode" type="text" name="postCode" placeholder="PostCode">
                
                <a href="#troley"><input class="submit" type="submit" name="form1" value="See Troley"></a>
            </div>
            

        </form>
      
    </body>
</html>
