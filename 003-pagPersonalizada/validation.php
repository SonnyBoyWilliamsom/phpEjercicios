<?php
extract($_POST);
//Función urlencode(): codifica caracteres extraños de forma que sean permitidos para el envío en URL
$bgColor=urlencode($bgColor);
$textUser=  urlencode($textUser);
$textColor=  urlencode($textColor);
header("location:welcome.php?nameUser=$nameUser&backgroundColor=$bgColor&textUser=$textUser&textColor=$textColor");


