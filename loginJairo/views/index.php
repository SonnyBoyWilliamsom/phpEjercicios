<?php //Includes
include '../functions/functions.php';

$action=check_get('action');

switch($action){
    case "login": 
        if(!correct_login()){
            echo "noooo";
            $msg = 'No existe el usuario y/o contraseña';
           
        }
        break;
    case "signup": echo 'Sign Up Correcto'; break;
    case "forgot": echo 'Email sent to your account'; break;
     
}
include '../includes/head.php'; //Head (head & header)
include '../controllers/viewsController.php';

?>

<?php include'../includes/footer.php'; ?>

<!--Hay que tener en cuenta que estamos haciendo todo en index.php, es decir no tenemos una página de visualización independiente para login, signup o forgot password, todo lo hacemos desde y para la misma página. Luego cuando se lo indiquemos por la url, index mostrará alguna de las tres páginas con formulario que hemos creado.
 
1- Para poder cargar cada vista cuando corresponda lo que hacemos es pasar la variable "view" por la url:
 * a. Cargar la vista principal de Login:
        url: http://.../views/index.php?view=login ó http://.../views/index.php
        Es decir, si $_GET["view"]="login" ó $_GET["view"]="" cargaremos con el controlador la vista de login.
 * b. Cargar la vista de Sign up: 
        url: http://.../views/index.php?view=signup 
        Es decir, si $_GET["view"]="signup" cargaremos con el controlador la vista de signup.
 * c. Cargar la vista de Forgot: 
        url: http://.../views/index.php?view=forgot 
        Es decir, si $_GET["view"]="forgot" cargaremos con el controlador la vista de forgot.
 
2- Para poder tratar cada uno de los formularios de forma independiente también nos servimos de la url y con el código php que introducimos en index comprobamos todos los datos y los tratamos como corresponda en cada caso:
* a. Para tratar los datos del formulario de Login:
        url: http://.../views/index.php?action=login 
        Es decir, si $_GET["action"]="login" procesaremos el formulario de login.
 * b. Cargar la vista de Sign up: 
        url: http://.../views/index.php?action=signup 
        Es decir, si $_GET["view"]="action" procesaremos el formulario de signup.
 * c. Cargar la vista de Forgot: 
        url: http://.../views/index.php?action=forgot 
        Es decir, si $_GET["view"]="action" procesaremos el formulario de  forgot.
 

*/-->
