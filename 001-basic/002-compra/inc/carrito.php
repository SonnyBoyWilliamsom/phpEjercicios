<?php
session_start(); //Se inicia sesión antes de hacer ninguna petición a la misma 
if (isset($_POST["form1"])) {

    function arraySinNulos($value1, $value2, $index) {
        $BiArray[$index]["product"] = $value1;
        $BiArray[$index]["quantity"] = $value2;
         return $BiArray;
    }

    $a = 0;
    $products = array(array());
    var_dump($_POST); //Por el formulario nos llega el array con todos los productos y la cantidad (tanto 0 como mayores a 0). Para poder mostrar al usuario los productos que va a comprar (cantidad > 0) se ha de recorrer el array y seleccionar dichos productos
    $compra = false; //boleano que nos indicará si se a seleccionado o no al menos un producto
    $a = 0;
    //Los valores numéricos que vienen del formulario lo hacen en tipo string, para poder tratarlos como números en sí los convertiremos de string a integer
    foreach ($_POST as $product => $quantity) {//Del array $_POST (que viene del formulario), la cantidad de cada producto 
        $quantity = (integer) $quantity; //Se convierte de String a Integer

        if (!empty($quantity) && gettype($quantity) == "integer" && $product != "numberHouse" && $product != "postCode") {//Si la cantidad es !=0 y el tipo Integer. Se pintarán los valores del array $_POST ($product y $quantity)
            $productos = arraySinNulos($productos, $product, $quantity, $a);
            $compra = true; //Si se ha seleccionado algún producto, la compra es true
            $a++;
        }
    }

    if ($compra) { //Si ha habido compra se muestra la opcion de pagar 
        echo 'dentro compra';
        $_SESSION["products"] = $productos;
       
    } else {
        $msg = "No products selected!";
    }
}
?>


<div class="trolley">
    <h2>Trolley</h2>
    <ul>
        <li> <span class="producto"> Producto </span> : <span class="cantidad"> Cantidad</span></li>
        <?php  include 'list.php'; ?>
    </ul>
</div>

