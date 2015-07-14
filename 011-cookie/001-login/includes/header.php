<?php
$nombre = explode ("@",$_COOKIE["emailUser"]);
$nombrePag=ucfirst($nombre[0]);
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
        <title>Profile</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <h1><a href="index.php">Logo</a></h1>
            <nav>
                <ul>
                    <li>Hola, <?=$nombrePag?> </li>
                    <li><a href="perfil.php">Perfil</a></li>
                    <li><a href="favoritos.php">Favoritos</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </nav>
        </header>
        <main>