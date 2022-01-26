<?php 
    // Importa las funciones
    require '../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1 class="admin__titulo">Administrador de bienes raices</h1>
        <a href="/Admin/propiedades/crear.php" class="btn">Añadir propiedad</a>
    </main>
    
<?php incluirTemplate('footer');?>