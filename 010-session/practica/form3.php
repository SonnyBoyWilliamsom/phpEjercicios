<?php
if (isset($_POST["form2"])) {//surnameUser
    session_start();
    $_SESSION["apellido"] = $_POST["surnameUser"];
} else {
    header("location:index.php");
}
?>
<?php include './includes/head.php'; ?>

<form action="fin.php" method="post">
    <fieldset>
        <legend>Form2</legend>
        <p>¿Es su nombre <?= $_SESSION["nombre"] ?> <?= $_SESSION["apellido"] ?>?</p>
        <input type="submit" name="form3" value="No">
        <input type="submit" name="form3" value="Si">
    </fieldset>
</form>

<?php include './includes/footer.php'; ?>