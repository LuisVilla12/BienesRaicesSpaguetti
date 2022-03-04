<?php
// Autenticar el usuario
// Si el metodo es post
if($_SERVER['REQUEST_METHOD']==='POST'){
    // Asigna los valores del post
    $correo=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $contraseña=$_POST['contraseña'];
}

// Importa las funciones
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="">Iniciar sesión</h1>
    <form action="" class="formulario" method="POST">
        <fieldset>
            <div class="campo">
                <label for="usuario" class="campo__label">Correo electronico:</label>
                <input type="email" id="usuario" class="campo__input" name="email">
            </div>
            <div class="campo">
                <label for="contraseña" class="campo__label">Contraseña:</label>
                <input type="password" id="contraseña" class="campo__input" name="contraseña">
            </div>
        </fieldset>
        <input type="submit" value="Iniciar sesión" class="btn-enviar">
    </form>
</main>

<?php incluirTemplate('footer'); ?>