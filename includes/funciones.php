<?php 
require 'app.php';
function incluirTemplate(string $nombre, bool $imagen=false){
    include TEMPLATES__URL . "/${nombre}.php";
}

function validarInicioSesion ()  {
    session_start();
    // ver valores de la superglobal login
    $autenticar=$_SESSION['login'];
    if($autenticar){
        return true;
    }else{
        return false;
    }
}
