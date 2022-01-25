<?php 
require 'app.php';
function incluirTemplate(string $nombre, bool $imagen=false){
    include TEMPLATES__URL . "/${nombre}.php";
}
?>