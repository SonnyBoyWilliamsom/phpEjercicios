<?php
session_start();
if(isset($_SESSION["emailUser"])){
    session_destroy();
    header("location:index.php?c=1");
}else{
    header("location:index.php");
}

?>
