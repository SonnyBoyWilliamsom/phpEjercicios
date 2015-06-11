<?php
var_dump($_POST);
extract($_POST);

//
if($nameUser=="elena@cice.es" && $passUser=="1234"){
    header("location: bienvenida.php?email=$emailUser");
}else if($nameUser!="elena@cice.es"){
    header("location: index.php?error=1");
}else{
     header("location: index.php?error=2");
}

