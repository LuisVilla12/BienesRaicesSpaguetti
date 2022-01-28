<?php
// Importar la conexion
require '../../includes/config/database.php';
$db = conectarDB();
// Consultar todos los vendedores
$queryVendedores = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $queryVendedores);

// Crea arreglo de errores
$errores = [];

//Inicio de variables
$titulo = '';
$precio = '';
$imagen = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamientos = '';
$idVendedor = '';

// Valida que sea el metodo POST cuando den el boton de enviar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamientos = $_POST['estacionamientos'];
    $idVendedor = $_POST['vendedor'];
    $creado= date('Y/m/d');

    // Valida que no ocurran errores
    if (!$titulo) {
        $errores[] = 'Debe ingresar un titulo a la propiedad';
    }
    if ($precio < 9000) {
        $errores[] = 'Debe ingresar un precio valido  a la propiedad';
    }
    if (strlen($descripcion) < 20) {
        $errores[] = 'Debe ingresar una descripcion valida a la propiedad';
    }
    if (!$habitaciones) {
        $errores[] = 'Debe ingresar un n° de habitaciones a la propiedad';
    }
    if (!$wc) {
        $errores[] = 'Debe ingresar un n° de wc a la propiedad';
    }
    if (!$estacionamientos) {
        $errores[] = 'Debe ingresar un n° de estacionamientos a la propiedad';
    }
    if (!$idVendedor) {
        $errores[] = 'Debe seleccionar un vendedor a la propiedad';
    }

    // Si el arreglo de errores esta vacio
    if (empty($errores)) {

        //consulta a la base de datos
        $query = "INSERT INTO propiedades  (titulo,precio,descripcion, habitaciones,wc,estacionamientos,creado,idVendedor) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamientos','$creado','$idVendedor')";
        // echo $query;
        // Insertarlo a la base de datos
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            // Redireccionar el usuario
            header('Location:/admin');
        }
    }
}

// Importa las funciones
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="admin__titulo">Nueva propiedad</h1>
    <a href="/Admin" class="btn">Volver</a>

    <!-- Itera en el arreglo de erroes -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <p><?php echo $error ?></p>
        </div>
    <?php endforeach; ?>

    <!-- action se encarga de enviar los datos en una pagina en especifico-->
    <form action="/Admin/propiedades/crear.php" class="formulario" method="POST">
        <fieldset>
            <legend>Informacion general</legend>
            <div class="campo">
                <label class="campo__label" for="titulo">Titulo: </label>
                <input class="campo__input" type="text" id="titulo" name="titulo" placeholder="Ingrese el titulo de la propiedad" value="<?php echo $titulo; ?>">
            </div>
            <div class="campo">
                <label class="campo__label" for="precio">Precio: </label>
                <input class="campo__input" type="number" id="precio" name="precio" placeholder="Ingrese el precio de la propiedad" value="<?php echo $precio; ?>">
            </div>
            <div class="campo">
                <label class="campo__label" for="imagen">Imagen: </label>
                <input class="campo__input" type="file" id="imagen" name="imagen" accept="image/jpeg,image/png">
            </div>
            <div class="campo">
                <label class="campo__label" for="descripcion">Descripcion: </label>
                <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <div class="campo">
                <label class="campo__label" for="habitaciones">Habitaciones: </label>
                <input class="campo__input" type="number" id="habitaciones" placeholder="Ingrese el n° de habitaciones" min="1" name="habitaciones" value="<?php echo $habitaciones; ?>">
            </div>
            <div class="campo">
                <label class="campo__label" for="wc">wc: </label>
                <input class="campo__input" type="number" id="wc" placeholder="Ingrese el n° de baños" min="1" name="wc" value="<?php echo $wc; ?>">
            </div>
            <div class="campo">
                <label class="campo__label" for="estacionamientos">Estacionamientos: </label>
                <input class="campo__input" type="number" id="estacionamientos" placeholder="Ingrese el n° de estacionamientos" min="1" name="estacionamientos" value="<?php echo $estacionamientos; ?>">
            </div>
        </fieldset>
        <fieldset>
            <legend>Información del vendedor</legend>
            <select id="" name="vendedor" class="campo__input">
                <option value="">--Sin seleccionar --</option>
                <?php while ($row = mysqli_fetch_assoc($resultadoVendedores)) : ?>
                    <option <?php echo $idVendedor === $row['id'] ? 'selected' : '' ?> value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . " " . $row['apellido']; ?></option>

                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Registrar" class="btn-enviar">
    </form>
</main>

<?php incluirTemplate('footer'); ?>