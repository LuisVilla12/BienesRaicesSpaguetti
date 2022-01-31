<?php
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
            <tr>
                <td>1</td>
                <td>Nombre aaaaaaaaaaaaaaaaaa</td>
                <td></td>
                <td>90000</td>
                <td>
                    <a href="" class="btn amarillo" >Actualizar</a>
                    <a href="" class="btn rojo" >Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<?php incluirTemplate('footer'); ?>