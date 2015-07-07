<?php session_start(); ?>

<?php
if(!isset($_SESSION["nombre"])){
    header("location:index.php");
}
?>
<?php $title="PAGINA2";?>
<?php include'./inc/head.php'; ?> 
<h1><?=$title?></h1>
<p>Hola <?=$_SESSION["nombre"]?> todo el mundo esto es <?=$title?></p>
<?php include'./inc/footer.php'; ?> 