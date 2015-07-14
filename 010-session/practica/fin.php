<?php
if (isset($_POST["form3"])) {//form3
    session_start();
    if ($_POST["form3"] == "No") {
        $msg = "Su nombre No es "; 
    } else {
        $msg = "Su nombre es ";
    }
} else {
    header("location:index.php");
}
?>
<?php include './includes/head.php'; ?>

<h2>Gracias por rellenar el formulario</h2>
<h3><?= "Su nombre es ". $_SESSION["nombre"].  $_SESSION["apellido"]; ?></h3>
<a href="index.php">Volver al inicio</a>

<?php 
session_destroy();
include './includes/footer.php'; ?>