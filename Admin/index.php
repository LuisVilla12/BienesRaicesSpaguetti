<?php
// Importar conexion
require '../includes/config/database.php';
$db = conectarDB();
// Query
$queryPropiedades = "SELECT * FROM propiedades";
//Consultar la base de datos
$resultadoPropiedades = mysqli_query($db, $queryPropiedades);
// Sino existe se asigna el valor null
$registro = $_GET['registro'] ?? null;

// Obtiene el valor del metodo post del input hidden
if($_SERVER['REQUEST_METHOD']==='POST'){
    $id=$_POST['id']; 
    $id=filter_var($id,FILTER_VALIDATE_INT);
    if($id){
        // Seleccionar el nombre de la imagen
        $queryImagen = "SELECT imagen FROM propiedades WHERE id=${id}";
        //hace la consulta
        $resultadoImagen=mysqli_query($db,$queryImagen);
        //Lo vuelve un objeto
        $propiedad=mysqli_fetch_assoc($resultadoImagen);

        // Eliminarlo de la carptea de imagenes
        $carpetaImagenes = '../imagenes/';
        unlink($carpetaImagenes . $propiedad['imagen']);

        // Eliminar el registro con ese ID
        $queryDelete="DELETE FROM propiedades WHERE id=${id}";
        $resultadoDelete=mysqli_query($db,$queryDelete);
        
        if($resultadoDelete){
            header('Location:/admin?registro=3');
        }
    }
}
// Importa las funciones
require '../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="admin__titulo">Administrador de bienes raices</h1>
    <?php if (intval($registro) === 1) : ?>
        <div class="alerta exito">
            <p>Propiedad registrada correctamento</p>
        </div>
    <?php endif; ?>
    <?php if (intval($registro) === 2) : ?>
        <div class="alerta exito">
            <p>Propiedad actualizada correctamento</p>
        </div>
    <?php endif; ?>
    <?php if (intval($registro) === 3) : ?>
        <div class="alerta exito">
            <p>Propiedad eliminada correctamento</p>
        </div>
    <?php endif; ?>
    <a href="/Admin/propiedades/crear.php" class="btn">Añadir propiedad</a>
    <table class="lista">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($propiedad = mysqli_fetch_assoc($resultadoPropiedades)) : ?>
                <tr>
                    <td><?php echo $propiedad['id'] ?></td>
                    <td><?php echo $propiedad['titulo'] ?></td>
                    <td>
                        <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="l">
                    </td>
                    <td>$<?php echo $propiedad['precio'] ?></td>
                    <td>
                        <a href="/Admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="btn amarillo">Actualizar</a>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="btn rojo enviar" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
mysqli_close($db);
incluirTemplate('footer');
?>