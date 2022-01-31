<?php
// Importar la conexion
require '../../includes/config/database.php';
$db = conectarDB();
// Consultar todos los vendedores
$queryVendedores = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($db, $queryVendedores);

// Obtener el valor del id del metodo GET
$id = $_GET['id'] ?? null;
// Validar que sea un entero
$id=filter_var($id,FILTER_VALIDATE_INT);
if(!$id){
    header('Location:/admin');
}
//consulta
$queryPropiedad= "SELECT * FROM propiedades WHERE id=${id}";
//resultado
$resultadoPropiedad=mysqli_query($db,$queryPropiedad);
//Hacer un arreglo
$propiedad=mysqli_fetch_assoc($resultadoPropiedad);

// Crea arreglo de errores
$errores = [];

//Inicio de variables
$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$imagenPropiedad = $propiedad['imagen'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamientos = $propiedad['estacionamientos'];
$idVendedor = $propiedad['idVendedor'];

// Valida que sea el metodo POST cuando den el boton de enviar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    //Sanitiza los resultados
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    // $imagen = mysqli_real_escape_string($db,$_POST['imagen']); 
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamientos = mysqli_real_escape_string($db, $_POST['estacionamientos']);
    $idVendedor = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    // Obtiene el nombre de la imagen que se subio
    $imagen = $_FILES['imagen'];

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
    if (!$imagen['name']) {
        $errores[] = 'Debes subir una imagen de la propiedad';
    }
    // Valida el tamaño de las imagenes (1000KB Maximo)
    // $medida = 1000 * 100;
    // if ($imagen['size'] > $medida || $imagen['error']) {
    //     $errores[] = 'Excedes el tamaño de la imagen';
    // }
    // Si el arreglo de errores esta vacio
    if (empty($errores)) {
        //Ruta de la carpeta
        $carpetaImagenes = '../../imagenes/';
        // Verifica si no exite esa ruta 
        if (!is_dir($carpetaImagenes)) {
            // Crea la carpeta con esa ruta
            mkdir($carpetaImagenes);
        }
        //Generar nombre unico
        // md5=hashea un texto y lo convierte
        // uniqid=Genera un id unico
        $nombreImagen=md5(uniqid(rand(),true)) .".jpg";

        // Mueve la imagen
        move_uploaded_file($imagen['tmp_name'],$carpetaImagenes . $nombreImagen);
        
        //consulta a la base de datos
        $query="UPDATE propiedades set titulo='$titulo',precio=$precio,imagen='$nombreImagen',descripcion='$descripcion',habitaciones=$habitaciones,wc=$wc,estacionamientos=$estacionamientos,idVendedor='$idVendedor' WHERE id=${id} ";
        
        // Insertarlo a la base de datos
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            // Redireccionar el usuario
            header('Location:/admin?registro=2');
        }
    }
}

// Importa las funciones
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="admin__titulo">Actualizar Propiedad</h1>
    <a href="/Admin" class="btn">Volver</a>

    <!-- Itera en el arreglo de erroes -->
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <p><?php echo $error ?></p>
        </div>
    <?php endforeach; ?>

    <!-- action se encarga de enviar los datos en una pagina en especifico-->
    <!-- enctype es para la subida de archivo -->
    <form class="formulario" method="POST" enctype="multipart/form-data">
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
                <img src="/imagenes/<?php echo $imagenPropiedad?>" alt="a">
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
        <input type="submit" value="Actualizar" class="btn-enviar">
    </form>
</main>

<?php incluirTemplate('footer'); ?>