<?php

//////1º OBTENEMOS DATOS DEL FICHERO procedentes del formulario con la variable superglobal $_FILES = array asociativo multidimensional. 
//NO puedo acceder a los datos de un input de type="file" con $_POST ni $_GET ni $_REQUEST
//Para que se array $_FILES se genere, es OBLIGATORIO emplear el attr enctype="" en la etiqueta form
//################################################

//var_dump($_FILES);
$size=$_FILES["archivo"]["size"]; //tamaño en bytes del archivo
$type=$_FILES["archivo"]["type"]; //el tipo mime del archivo
$name=$_FILES["archivo"]["name"]; //nombre original del archivo
$error=$_FILES["archivo"]["error"]; //código de error asociado a la carga del archivo ( 0=no hay error, 1=la subida del fichero excede del max tamaño permitido por php declarado en el fichero de configuración php.in bajo el dato upload_max_filesize = 2M , 2=la subida del fichero excede del max tamaño permitido por el formulario, 3=subida incompleta, 4=no hay fichero, 6=no encuentra la carpeta )
$tmp_name=$_FILES["archivo"]["tmp_name"]; //nombre temporal del archivo

//Sacamos extensión del fichero
$name_array=explode(".",$name);
$ext = mb_strtolower(end($name_array),"UTF-8");


//////2º Valores permitidos
###########################################################################
//Extensiones permitidas
$extPermitidas = array("jpg","png","gif","jpeg");
//Tipos mime permitidos
$typePermitidos = array("image/jpeg","image/png","image/gif","image/pjpeg");
//Tam máx
$sizeMax=1048576; //bytes


//////3º Validaciones, una vez que tenemos los datos del archivo. empezamos las validaciones para subirlo a nuestra carpeta "upload"
//#########################################################################
if( in_array($ext,$extPermitidas) && in_array($type,$typePermitidos) && $size<=$sizeMax && $error==0 ){
    
    //Preguntar si existe la carpeta, sino la crearé
    if(file_exists("upload")){
        if(move_uploaded_file($tmp_name, "upload/".time()."_".$name)){
            $codigo=2;//Archivo subido correctamente
        }else{
            $codigo=3;//Fallo en la subida del archivo
        }
    }else{
        //Función mkdir(ruta/nombreCarpeta, permisos) = devuelve T/F si se ha creado el directorio o carpeta
        if(mkdir("upload",0777)){
            if(move_uploaded_file($tmp_name, "upload/".time()."_".$name)){
                $codigo=2;
            }else{
                $codigo=3;
            }
        }else{
            $codigo=4;//Fallo en la creación del directorio
        }
    }
    
}else{
    $codigo=0;//Fallo en el archivo
}

//////4º Redirección a index enviándole el código de mensaje que debe mostrar
header("location:index.php?c=$codigo");
