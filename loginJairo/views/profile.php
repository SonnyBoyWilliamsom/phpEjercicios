<?php
include '../functions/functions.php';
session_start();//Con la función session_start no se inicia sesión, esta ya existe una vez nos conectamos, lo que en realidad estamos haciendo es dejar a php uqe pueda consultar los datos que se almacena en dicho array
if(!isset($_SESSION["username"]) || empty($_SESSION["username"])){
    session_destroy();
    header("location:index.php");
    exit();
}
$get = check_get('action');
if ($get == logout) {
    log_out();
    header("location:index.php");
    exit();
}


/* Controlador de acciones de la página profile.
      Por lo general se usa un mismo controlador para todas las acciones, en este caso como solo tenemos una para la página de profile.php que nos ayuda a cerrar sesión, podemos usar un controlador independiente para soslo esta página
     *  */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Phanum | Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{margin: 0; padding: 0; box-sizing: border-box;}
            html,body{height: 100%;}
            body{
                font: 1em/1.5 sans-serif;
              
            }
            a{text-decoration: none; color: #141414;}
            header{
                background: #fff;
                width: 975px;
                margin: 0 auto;
                overflow: hidden;
            }
            header nav h1{
                background: url(../img/logo.png) no-repeat left center;
                background-size: 180px;
                width: 200px;
                height: 100px;
                float: left;
                margin-left: 20px;
            }
            header nav ul{
                color: #141414;
                float: right;
            }
            header nav ul li{
                list-style: none;
                display: inline-block;
                text-transform: uppercase;
/*                line-height: 100px;*/
               
            }
            header nav ul li a{
                display: inline-block;
                padding: 38px;
                
            
            }
            
            header nav ul li a:hover{
                background: #141414;
                color: #fff; 
            }
            
           
            header nav ul li:last-child ul.menuProfile li{
                display: block;
                
            }
            header nav ul li:last-child ul.menuProfile li a{
                padding: 5px;
                color: #fff;
                border-bottom: 2px solid #141414;
            }
            header nav ul li:last-child ul.menuProfile li a:hover{
                border-bottom: 2px solid #fff;
            }
            a#end, ul.menuProfile{
                display: none;
            }
            /*Simbolos positivo y negativo del menu extensible de perfil*/
            span{
                position: relative;
                top: -1px;
                display:inline-block;
            }
            /*Desplegamos el menu usando target*/
            #profileMenu:target a#end, #profileMenu:target ul.menuProfile{
                display: block;
            }
            #profileMenu:target a#call{
                display: none;
            }
            ul.menuProfile{
                background: #141414;
                padding: 5px;
             
            }
            
        </style>
    </head>
    <body>
        <header>
            <nav>
                <h1></h1>
                <ul>
                    <li><a href="#">Mejorar cuenta</a></li>
                    <li><a href="#">Ayuda</a></li><li><a href="#">Descargar</a></li>
                    <li id="profileMenu">
                        <a href="#profileMenu" id="call">Profile <span>+</span></a>
                        <a href="#" id="end">Profile <span>-</span></a>
                        <ul class="menuProfile">
                            <li><a href="#">Edit</a></li>
                            <li><a href="<?=$_SERVER["PHP_SELF"]?>?action=logout">Log out</a></li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>
