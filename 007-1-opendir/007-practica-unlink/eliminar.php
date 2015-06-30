<?php
/*Obtenemos el nombre del archivo que queremos eliminar desde galeria*/
$name=$_GET["name"];

if(unlink("upload/".$name)){
    header("location:index.php?c=11");
}