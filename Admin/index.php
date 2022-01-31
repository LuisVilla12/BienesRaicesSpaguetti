<?php
// Importar conexion
require '../includes/config/database.php';
$db = conectarDB();
// Query
$queryPropiedades="SELECT * FROM propiedades";
//Consultar la base de datos
$resultadoPropiedades=mysqli_query($db,$queryPropiedades);
// Sino existe se asigna el valor null
$registro = $_GET['registro'] ?? null;
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
            <?php while ($propiedad=mysqli_fetch_assoc($resultadoPropiedades)): ?>
            <tr>
                <td><?php echo $propiedad['id'] ?></td>
                <td><?php echo $propiedad['titulo'] ?></td>
                <td>
                    <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="l">
                </td>
                <td>$<?php echo $propiedad['precio'] ?></td>
                <td>
                    <a href="" class="btn amarillo" >Actualizar</a>
                    <a href="" class="btn rojo" >Eliminar</a>
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