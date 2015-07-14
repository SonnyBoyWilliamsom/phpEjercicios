
<?php include './includes/security.php'; ?>
<?php
setcookie("emailUser",$emailUser, time());//Para eliminar el valor de una cookie se ha de iniciar pero con valor vacío 
header("location:index.php?c=1");
?>