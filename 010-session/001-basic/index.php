<?php
//Antes de guardar datos en el servidor es necesario crear un canal de comunicación con el servidor
session_start();//No puede haber ni un salto ni estar entre etiquetas HTML

//Es ahora cuando se puede almacenar el dato
$_SESSION["nombre"]="Jairo";?>
<?php $title="HOME";?>
<?php include'./inc/head.php'; ?> 
<h1><?=$title?></h1>
<p>Hola <?=$_SESSION["nombre"]?> a todo el mundo esto es <?=$title?></p>
<?php include'./inc/footer.php'; ?> 