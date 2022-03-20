<?php 
// Retornar una conexion
function conectarDB():mysqli{
    $db=mysqli_connect('localhost','root','qazqazqaz9','bienes_raices','3306');
    if(!$db){
        echo "ERROR";
        exit;
    }
    return $db;
}
?>