<?php
if (isset($_POST["form1"])) {//nameUser
    session_start();
    $_SESSION["nombre"] = $_POST["nameUser"];
} else {
    header("location:index.php");
}
?>
<?php include './includes/head.php'; ?>

<form action="form3.php" method="post">
    <fieldset>
        <legend>Form2</legend>
        <p>Su nombre es <?= $_SESSION["nombre"] ?></p>
        <input type="text" name="surnameUser" placeholder="Escriba su apellido" required>
        <input type="submit" name="form2" value="Go">
    </fieldset>
</form>

<?php include './includes/footer.php'; ?>     