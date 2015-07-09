
<?php include './includes/security.php'; ?>
<?php
session_destroy();
header("location:index.php?c=1");
?>