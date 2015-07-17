
<form action="<?=$_SERVER["PHP_SELF"]?>?a=forgot" method="post">
    <label for="emailUser">Username<!--El atributo for="" vincula el label con el id del input-->
        <input type="text" name="emailUser" id="emailUser">
    </label>
    
   <input type="submit" name="forgot" value="Recuperar contraseña" calss="small button">
    
    <div>
      
        <a href="<?=$_SERVER["PHP_SELF"]?>">Volver</a>
        
    </div>

</form>
