<?php 
if(!$_GET){
    header("location:index.php");
}else{extract($_GET);} ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1><?= $title; ?></h1>
        <section id="watch">
             <img src="img/<?=$nombreFoto?>" alt="">
             <a href="index.php" >Ver galería</a>
        </section>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
