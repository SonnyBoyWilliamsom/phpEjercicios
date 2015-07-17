<?php
function check_get($a){
    if(isset($_GET[$a]) && !empty($_GET[$a])){
        return $_GET[$a];
    }
    return false;
}
function check_post($a){
    if(isset($_POST[$a]) && !empty($_POST[$a])){
        return $_POST[$a];
    }
    return false;
}
function check_login(){
    $emailUser = check_post('emailUser');
    $passUser = check_post('passUser');
    $remember = check_post('remember');
    include '../bbdd/usuarios.php';
    foreach ($users as $user){
        if($emailUser == $user['username'] && $passUser == $user['username']){
            /*Preguntamos si se establecen cookies*/
            if($remember){
                setcookie('login', $emailUser, strtotime('+15 days'));//strtotime convierte la cadena que pasamos como parámetro de entrada en dato de fecha
            }
            session_start();
            $_SESSION['username'] = $emailUser;
            header('location: profile.php');
            exit();//Es bueno salir para que header location no vuelva a cambiar de nuevo a lo largo del código
            }
            echo 'No existe el usuario y/o contraseña';
            return false;
    
    }
}
function end_session(){
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }//Pregunta si la sesión está iniciada, no iniada o si el servidor no acepta sesiones
    session_destroy();
    header('location: index.php');
}