<?php
if(isset($_POST["formSearch"])){
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LogIn</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="login">
        <h1>Searcher.com</h1>
        <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="busqueda" placeholder="Search" required>
               

                <input type="submit" name="formSearch" value="Go">

            </form>
            <img src="<?=?>">
        </main>

    </body>
</html>
