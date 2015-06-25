<?php
/*
No se pueden acceder a los datos de un input de tipo file con las variables $_POST, $_GET o $_REQUEST
1-Se han de recoger los datos del array $_FILES (nombre, tipo, ubicación temporal, errores y el tamaño). Cada "name" del input de tipo "file" es la clave del array asociativo $_FILES. Para que este array sea creado es necesario indicar en el form el atributo enctype="multipart/form-data"
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

$name=$_FILES["FotoDoc"]["name"];
$type=$_FILES["FotoDoc"]["type"];
$size=$_FILES["FotoDoc"]["size"];
$error=$_FILES["FotoDoc"]["error"];
$tmp_name=$_FILES["FotoDoc"]["tmp_name"];

/*1-Obtenemos la extensión del archivo*/
$extenstion=explode(".",$name);


/*Establecemos un limite de subida en MBytes*/

$max_size=1048576;

/*Especificamos las extensiones de las fotos y documentos*/
$ext_pic=array("jpg","jpeg","png","gif");
$ext_doc=array("pdf","doc","docx");
$typePicDoc = array("image/jpeg","image/png","image/gif","image/pjpeg","application/pdf","application/msword");


/*Ahora se empieza a hacer las comprobaciones de si el archivo que estamos subiendo cumple con todas las especificaciones*/
if ($size <= $max_size) {

    if ($error == 0) {

        if (in_array(end($extenstion), $ext_pic)) {

            if (move_uploaded_file($tmp_name, "img/picture" . time() .$name)) {
                $code = 3; //Fichero FOTO subido correctamente
            } else {
                $code = 5; //fallo en la subida
            }
        } else if (in_array(end($extenstion), $ext_doc)) {
            if (move_uploaded_file($tmp_name, "docs/document" . time() .$name)) {
                $code = 4; //Documento subido correctamente
            } else {
                $code = 5; //fallo en la subida
            }
        } else {
            $code = 2; //extensión no permitida
        }
    } else {

        $code = 0; //error en el archivo
    }
} else {
    $code = 1; //excede tamaño permitido
}

//
//Redireccion a index en caso de error
header("location:index.php?code=$code");
?>