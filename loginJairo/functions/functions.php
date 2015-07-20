<?php 
//<!--Para simplificar el código y hacerlo más intuitivo y legible se usarán funciones que se incluirán en cada página que sea necesario usarlas.
//Entre estas funciones se encuentran comprobar si vinenen valores válidos por $_GET y por $_POST. Pero también crearemos funciones para comprobar si un login está bien hecho.
//-->

/*Función check_get() comprueba si $_GET contiene información de las vistas o de los "action" de los fromularios y devuelve el valor que corresponda (login, signup o forgot). False si no lleva info..

    -Para cargar las vistas comprobaremos si $_GET nos trae información (por "view"). 
 
  */

function check_get($a){
    if(isset($_GET[$a]) && !empty($_GET[$a])){
        //Si $_GET está establecida y no esta vacía 
        return $_GET[$a];//Devolvemos login, signup o forgot
    }
    return false;
}
    /*Para cargar las acciones que procesan los datos enviados por los form comprobamos la información que nos trae $_GET a través de "action" ($_GET["action"])*/
function check_post($a){
    if(isset($_POST[$a]) && !empty($_POST[$a])){
        //Si la clave de entrada está establecida en $_POST y no esta vacía 
        return $_POST[$a];//Devolvemos emailuser, password o remember o forgot con lo que el controlador hará que los datos sean procesados de una u otra forma
    }
    return false;
}

function correct_login(){
    $emailUser = check_post("emailUser");
    $passUser = check_post("passUser");
    $rememberUser = check_post("rememberUser");
   
    include '../data/ddbb.php';//Hay que incluir la base de datos (en este caso un array que hemos creado nosotros) para poder comprobar si los datos introducidos por el usuario son correctos y se encuentran dentro de nuestro sistema.
    
    foreach($users as $user){
        if($emailUser == $user["username"] && $passUser == $user["password"]){
            if($rememberUser){
                setcookie('username', $emailUser, strtotime('+15 days'));
            }
            session_start();
            $_SESSION["username"]=$emailUser;
            header("location:profile.php");
            exit();//Es bueno salir para que header location no vuelva a cambiar de nuevo a lo largo del código
        }
         
        
       return false;
    }
}

function log_out(){//Hay que asegurarse que hay sesión iniciada para poder destruirla
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }//Función session_status() nos indica si la sesión está iniciada o no o si el servidor no acepta sesiones
    session_destroy();
}
?>
