<?php
// Importar la base de datos
require 'includes/config/database.php';
$db=conectarDB();
// correo y contraseña
$correo="admin@admin.com";
$contraseña="admin";
$contraseñaHash=password_hash($contraseña,PASSWORD_BCRYPT);
// Query
$query="INSERT INTO usuarios (correo,password) VALUES ('${correo}}','${contraseñaHash}')";

echo '<pre>';
var_dump($query);
echo '</pre>';
// Resultado
$resultado = mysqli_query($db,$query);
