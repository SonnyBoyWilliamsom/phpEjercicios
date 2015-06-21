<?php

extract($_POST);//email, pass

//
if($emailUser=="eduarda@gmail.com" && $passUser=="12341234"){
    header("location: bienvenida.php?email=$emailUser");
}else if($emailUser=="eduarda@gmail.com" && $passUser1!="12341234"){
    header("location: index.php?error=1");//error: wrong password
}else{
     header("location: index.php?error=2");//error: wrong email
}
