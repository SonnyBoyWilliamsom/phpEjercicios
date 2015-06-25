<?php
/*
No se pueden acceder a los datos de un input de tipo file con las variables $_POST, $_GET o $_REQUEST
1-Se han de recoger los datos del array $_FILE (nombre, tipo, ubicación temporal, errores y el tamaño). Cada "name" del input de tipo "file" es la clave del array asociativo $_FILE. Para que este array sea creado es necesario indicar en el form el atributo enctype="multipart/form-data"
-size: tamaño en byutes del archivo 
-type: tipo mime del archivo
-name: nombre original del archivo
-error: 
 * 0-no error
 * 1-execede el tamaño máximo permitido por php (en php.ini->upload-max-filesize)
 * 2-execede el tamaño máximo permitido por el formulario
 * 3-subida incompleta
 * 4-no hay fichero
 * 6-no encuentra la carpeta
No hay 5.
-tmp_name: nombre temporal del archivo



 */
var_dump($_FILES);

$name=$_FILES["File"]["name"];
$type=$_FILES["File"]["type"];
$size=$_FILES["File"]["size"];
$error=$_FILES["File"]["error"];
$tmp_name=$_FILES["File"]["tmp_name"];

//Obtención de la extensión
strrchr($name, ".")."<br>";
$ext = mb_strtolower(ltrim(strchr($name, "."),"."),"UTF-8");    
//
//Extensiones permitidas en este caso: jpg, jpeg, gif, png
$extPermitidas = array("jpg","jpeg","png","gif");
//Tipos mime permitidos
$typePermitidos = array("image/jpeg","image/png","image/gif","image/pjpeg");
//Max tamaño
$sizeMax = 70000; //bytes

//Una vez con todos los datos del archivo, empezamos las validaciones para subirlos a nuestra carpeta "upload"
if(in_array($ext,$extPermitidas) && in_array($type,$typePermitidos) && $size<=$sizeMax && $error==0){
    //Función file_exists(ruta/nombrefichero)= devuelve T/F si encuentra el fichero en la ruta
    if(move_uploaded_file($tmp_name, "upload/".time()."_".$name)){
       
        $codigo=1;corregirrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
    }else{
        //Función move_uploaded_file(tmp_name, rutaDestino/nameFichero) = devuelve T/F si se ha subido correctamente el fichero a la ruta de destino. Sirve para subir el archivo a la ruta especificada y comprobar si un fichero se ha subido correctamente
        if(move_uploaded_file($tmp_name, "upload/".$name) ){
            $codigo=2;//Se ha subido correctamente
        }else{
            $codigo=3;//Error en la subida
        }
        
    }
}else{
    $codigo=0;//Archivo no apto
}
//Redireccion a index en caso de error
header("location:index.php?code=$codigo")
?>