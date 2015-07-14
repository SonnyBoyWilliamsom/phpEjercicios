<?php include './includes/head.php'; 
 session_start(); 
 var_dump($_SESSION);
?>

<form action="form2.php" method="post">
    <fieldset>
        <legend>Form1</legend>
        <input type="text" name="nameUser" placeholder="Escriba su nombre" required>

        <input type="submit" name="form1" value="Go">
    </fieldset>
</form>

<?php include './includes/footer.php'; ?>     