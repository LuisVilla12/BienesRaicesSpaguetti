<?php

// Importar la base de datos
require 'includes/config/database.php';
$db = conectarDB();
$errores = [];
$correo = '';
$contraseña = '';
// Autenticar el usuario
// Si el metodo es post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Asigna los valores del post
    $correo = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $contraseña = mysqli_real_escape_string($db, $_POST['contraseña']);
    if (!$correo) {
        $errores[] = 'Ingrese un correo electronico ';
    }
    if (!$contraseña) {
        $errores[] = 'Ingrese una contraseña';
    }
    if (empty($errores)) {
        // Revisar y el usuario existe
        $query = "SELECT * FROM user WHERE correo = '${correo}'";
        $resultadoUsuario = mysqli_query($db, $query);
        if ($resultadoUsuario->num_rows) {
            $usuario=mysqli_fetch_assoc($resultadoUsuario);
            //verifica contraseñas una normal y una hasheada
            $autenticar= password_verify($contraseña,$usuario['contraseña']);
            if(!$autenticar){
                $errores[] = 'Contraseña incorrecta';    
            }
            else{
                // Inicia sesion
                // La session se puede llenar con datos que pasaran
                session_start();
                $_SESSION['usuario'] = $usuario['correo'];
                $_SESSION['name'] = $usuario['usuario'];
                $_SESSION['login'] = true;
                header('Location:/admin?registro=4');
            }

        } else {
            $errores[] = 'El usuario no existe';
        }
    }
}

// Importa las funciones
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="titulo__form">Iniciar sesión</h1>
    <form action="" class="formulario w-50" method="POST">
        <fieldset>
            <div class="campo">
                <label for="usuario" class="campo__label">Correo electronico:</label>
                <input type="email" id="usuario" class="campo__input" name="email" value="<?php echo $correo ?>">
            </div>
            <div class="campo">
                <label for="contraseña" class="campo__label">Contraseña:</label>
                <input type="password" id="contraseña" class="campo__input" name="contraseña" value="<?php echo $contraseña ?>">
            </div>
        </fieldset>
        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <p><?php echo $error ?></p>
            </div>
        <?php endforeach ?>
        <input type="submit" value="Iniciar sesión" class="btn-enviar txt-center">
    </form>
</main>

<?php incluirTemplate('footer'); ?>