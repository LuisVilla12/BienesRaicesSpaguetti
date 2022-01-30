<?php
// Sino existe se asigna el valor null
$registro =$_GET['registro'] ?? null;
// Importa las funciones
require '../includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor">
    <h1 class="admin__titulo">Administrador de bienes raices</h1>
    <?php if($registro==1) : ?>
    <div class="alerta exito">
        <p>Propiedad registrada correctamento</p>
    </div>
    <?php endif;?>
    <a href="/Admin/propiedades/crear.php" class="btn">Añadir propiedad</a>
</main>

<?php incluirTemplate('footer'); ?>