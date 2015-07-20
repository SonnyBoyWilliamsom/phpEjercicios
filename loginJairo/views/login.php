
<form action="<?=$_SERVER["PHP_SELF"]?>?action=login" method="post">
    <h1>Log In</h1>
    <input type="text" name="emailUser" placeholder="Username or email" />
    <input type="text" name="passUser" placeholder="Password"/>
    <label for="rememberUser">Remember me
        <input type="checkbox" name="rememberUser" id="rememberUser"/>
    </label>
    
    <input type="submit" name="login" value="Log In"/>
    
    <div class="formExtra">
        <a class="signup" href="<?=$_SERVER["PHP_SELF"]?>?view=signup">Sign Up</a><!--Con este botón enviamos la página a la vista del formulario SignUp (con el controlador recogemos la URL para mostrar una u otra vista) -->
        <a class="forgot" href="<?=$_SERVER["PHP_SELF"]?>?view=forgot">Forgot Password</a><!--Con este botón enviamos la página a la vista del formulario forgot (con el controlador recogemos la URL para mostrar una u otra vista) -->
    </div>
    
</form>

<!--
Cuando se trabajan de forma estructurada el código se vuelve más legible y se facilita la detección de errores de sintaxis o de algorimo. Al dividir todas las funciones, acciones, controles, etc. en archivos diferentes agrupados en carpetas es más sencillo reutilizar el código en diversos proyectos asi como adaptar estructuras ya hechas de otros proyectos al que estamos haciendo actualmete.
Esta forma de trabajar se conoce como Modelo-Vista-Controlador (MVC, Model-View-Controller) y es en realidad la correcta forma de trabajo. Para crear proyectos incluso más estructurados se utilizan frameworks php como Symfony. Los frameworks ayudan a estructurar los proyectos de tal manera que estos puedan ser de mayor calidad, permitan un mejor mantenimiento y se puedan actualizar fácilmente.

Interacciones del desarrollo MVC: 

    -Modelo(Model): se refiere al almacenamiento de los datos (BBDD). En esta parte se trabaja con el modelado de datos (estructura, restricciones y operaciones). De hecho es la parte fundamental del proyecto, por tanto la que sostiene todo el sistema interno del proyecto. Es muy importante estudiar y crear un correcto modelado de datos antes de pasar al desarrollo de proyecto, ya que fallos en esta parte puede hacer que repitamos nuestro proyecto desde el principio.

    -Controlador(Controller): es la parte que manipula el modelo usando directrices introducidas por el usuario (cuando introduce sus datos en un formulario de acceso y es enviado a su pagina de perfil). Con el controlador además se dan paso a las vistas de datos (View). 

    -Vista(View): es la parte del proyecto enfocada a la visualización por parte del usuario. En el caso de desarrollo web, se puede considerar la parte pública del proyecto (HTML, CSS). Sirve de entrada de datos por parte del usuario a nuestro sistema (por ejemplo, formularios de registro o compra). El desarrollo de esta parte nos permite representar los resultados de todas las interacciones del controlador con los datos.
