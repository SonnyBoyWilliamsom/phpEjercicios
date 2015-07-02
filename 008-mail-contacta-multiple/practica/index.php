 <?php
 $users = array(
    array("user" => "Jairo", "password" => "1234jairo")
);
$msg = "";
if (isset($_POST["formLogin"])) {
    extract($_POST);
   
    if ($nameUser == "Jairo" && $passUser == "1234jairo") {
        $msg = "Login Correcto";
        header("location:mensajeria.php?msg=$msg");
    } else {
        $msg = "Login Incorrecto";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestor de Correo</title>
        <style>
            input, select, textarea{
                margin: 10px;
                padding: 5px;
                width: 250px;
                outline: none;

            }body{
                font-family: sans-serif;
                padding: 5%;
                text-align: center;
            }
            h1{
                color: tomato;
            }
            p{
                font-size: 1.3em;
                color: red;
            }
            select{
                width: 265px;
            }
            form{
                width: 270px;
                margin: 0 auto; 
            }
           
            input[type="submit"]{
                width: 90px;
                border:none;
                padding: 15px;
                background: tomato;
                color:#fff;
                font-size: 1.4em;
            }
        </style>
    </head>
    <body>
        <h1>LogIn</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="nameUser" placeholder="*Name User" required>
            <input type="password" name="passUser"  placeholder="*Password" required>
            
            <input type="submit" name="formLogin" value="Go" >
            
            
        </form>
        <p><?=$msg?></p>
    </body>
</html>
