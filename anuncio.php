<?php 
    // Importa las funciones
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="propiedades">
        <h2 class="propiedades__titulo">Casas y departamentos a la venta</h2>
        <?php 
            $limite=6;
            require'includes/templates/anuncios.php';
        ?>
    </main>

    <?php incluirTemplate('footer');?>