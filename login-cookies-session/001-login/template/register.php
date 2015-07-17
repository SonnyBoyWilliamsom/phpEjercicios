
<form action="<?=$_SERVER["PHP_SELF"]?>?a=register" method="post">
    <label for="emailUser">Username<!--El atributo for="" vincula el label con el id del input-->
        <input type="text" name="emailUser" id="emailUser">
    </label>
    <label for="passUser">Password<!--El atributo for="" vincula el label con el id del input-->
        <input type="text" name="passUser"  id="passUser">
    </label>
   <input type="submit" name="register" value="Sign Up" calss="small button">
    
    <div>
      
        <a href="<?=$_SERVER["PHP_SELF"]?>">Volver</a>
        
    </div>

</form>
