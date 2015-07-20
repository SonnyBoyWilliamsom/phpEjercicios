<form id="forgot" action="<?=$_SERVER["PHP_SELF"]?>?action=forgot" method="post">
    
    <p>Introduce your email and we send you instructions to update your password
        <input type="text" name="emailUser" placeholder="Email" id="forgotPass"/>
    </p>
    
    <input type="submit" name="signup" value="Update Pass"/>
    
    <div class="formExtra">
        <a class="forgot" href="<?=$_SERVER["PHP_SELF"]?>"?view=login">Back</a><!--Esta vez no enviamos nada por al url ($_GET["view"] va vacía). En el controlador especificaremos que en el caso de que la url venga sin valor o si viene con el valor $_GET["view"]=index hay que ir a la página de login principal-->
    </div>
    
</form>
