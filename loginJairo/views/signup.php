<form action="<?=$_SERVER["PHP_SELF"]?>?action=signup" method="post"><!--Con el action introducimos en $_GET["action"]-->
    <h1>Sign Up</h1>
    <input type="text" name="nameUser" placeholder="Name"/>
    <input type="text" name="emailUser" placeholder="Username or email" />
    <input type="text" name="passUser" placeholder="Password"/>
    <input type="text" name="passUserConfirmation" placeholder="Repeat Password"/>
   
    
    <input type="submit" name="signup" value="Sign Up"/>
    
    <div class="formExtra">
        <a class="forgot" href="<?=$_SERVER["PHP_SELF"]?>?view=login">Back</a>
    </div>
    
</form>
