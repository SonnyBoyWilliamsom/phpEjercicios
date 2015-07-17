
<form action="<?=$_SERVER["PHP_SELF"]?>?a=login" method="post">
    <h1>Login</h1>
    <label for="emailUser">Username<!--El atributo for="" vincula el label con el id del input-->
        <input type="text" name="emailUser" id="emailUser">
    </label>
    <label for="passUser">Password<!--El atributo for="" vincula el label con el id del input-->
        <input type="text" name="passUser"  id="passUser">
    </label>
    <label for="remember">Recuérdame<!--El atributo for="" vincula el label con el id del input-->
        <input type="checkbox" name="remember" id="remember">
    </label>
   
    <input type="submit" name="login" value="Go" calss="small button">
    
    <div>
        <a href="<?=$_SERVER["PHP_SELF"]?>?v=forgot">Olvidé la contraseña</a>
        <a href="<?=$_SERVER["PHP_SELF"]?>?v=register">Registrarse</a>
        
    </div>

</form>
