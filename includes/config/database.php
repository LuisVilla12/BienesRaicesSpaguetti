<?php 
// Retornar una conexion
function conectarDB():mysqli{
    $db=mysqli_connect('localhost','root','qazqazqaz9','bienes_raices','3360');
    if(!$db){
        exit;
    }
    return $db;
}
?>