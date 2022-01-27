<?php
// Importar la conexion
require '../../includes/config/database.php';
$db = conectarDB();
// Muestra los datos de la super variable POST
// echo "<pre>";    
// var_dump($_POST);
// echo "</pre>";   
// Valida que sea de un metodo POST
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

    //consulta a la base de datos
    $query = "INSERT INTO propiedades  (titulo,precio,descripcion, habitaciones,wc,estacionamientos,idVendedor) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamientos','$idVendedor')";
    // echo $query;
    
    // Insertarlo a la base de datos
    $resultado=mysqli_query($db,$query);
    if($resultado){
        echo "Insertado correctamente";
    }else{
        echo "Error";
    }
}
// Importa las funciones
require '../../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="admin__titulo">Nueva propiedad</h1>
    <a href="/Admin" class="btn">Volver</a>
    <!-- action se encarga de enviar los datos -->
    <form action="/Admin/propiedades/crear.php" class="formulario" method="POST">
        <fieldset>
            <legend>Informacion general</legend>
            <div class="campo">
                <label class="campo__label" for="titulo">Titulo: </label>
                <input class="campo__input" type="text" id="titulo" name="titulo" placeholder="Ingrese el titulo de la propiedad">
            </div>
            <div class="campo">
                <label class="campo__label" for="precio">Precio: </label>
                <input class="campo__input" type="number" id="precio" name="precio" placeholder="Ingrese el precio de la propiedad">
            </div>
            <div class="campo">
                <label class="campo__label" for="imagen">Imagen: </label>
                <input class="campo__input" type="file" id="imagen" name="imagen" accept="image/jpeg,image/png">
            </div>
            <div class="campo">
                <label class="campo__label" for="descripcion">Descripcion: </label>
                <textarea name="descripcion" id="descripcion"></textarea>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
            <div class="campo">
                <label class="campo__label" for="habitaciones">Habitaciones: </label>
                <input class="campo__input" type="number" id="habitaciones" placeholder="Ingrese el n° de habitaciones" min="1" name="habitaciones">
            </div>
            <div class="campo">
                <label class="campo__label" for="wc">wc: </label>
                <input class="campo__input" type="number" id="wc" placeholder="Ingrese el n° de baños" min="1" name="wc">
            </div>
            <div class="campo">
                <label class="campo__label" for="estacionamientos">Estacionamientos: </label>
                <input class="campo__input" type="number" id="estacionamientos" placeholder="Ingrese el n° de estacionamientos" min="1" name="estacionamientos">
            </div>
        </fieldset>
        <fieldset>
            <legend>Información del vendedor</legend>
            <select  id="" name="vendedor" class="campo__input">
                <option value="0">--Sin seleccionar --</option>
                <option value="1">Luis Villa</option>
                <option value="2">Moises</option>
            </select>
        </fieldset>
        <input type="submit" value="Registrar" class="btn-enviar">
    </form>
</main>

<?php incluirTemplate('footer'); ?>