<?php
session_start();
// Elimina todos los datos de la super varibale SESSION

$_SESSION=[];

header('Location:/')
?>