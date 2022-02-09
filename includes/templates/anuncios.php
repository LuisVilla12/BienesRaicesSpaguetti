<?php
// Importar la base de datos
require 'includes/config/database.php';
$db = conectarDB();
// query
$query = "SELECT * FROM propiedades LIMIT ${limite}";
//consultar
$resultado = mysqli_query($db, $query);

?>
<div class="propiedades__grid contenedor">
    <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
        <div class="propiedad">
            <div class="propiedad__maks">
                <picture>
                    <!-- <source srcset="" type="image/avif"> -->
                    <!-- <source srcset="build/img/anuncio1.webp" type="image/webp"> -->
                    <img loading="lazy" class="propiedad__img" src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio1">
                </picture>
            </div>
            <h3 class="propiedad__titulo"><?php echo $propiedad['titulo'] ?></h3>
            <div class="propiedad__contenido">
                <p class="propiedad__descripcion"><?php echo $propiedad['descripcion'] ?></p>
                <p class="propiedad__precio">$ <span><?php echo $propiedad['precio'] ?></span></p>
                <div class="propiedad__iconos">
                    <div class="icono">
                        <img class="icono__img" src="build/img/icono_wc.svg" alt="">
                        <p class="icono__cantidad"><?php echo $propiedad['wc'] ?></p>
                    </div>
                    <div class="icono">
                        <img class="icono__img" src="build/img/icono_estacionamiento.svg" alt="">
                        <p class="icono__cantidad"><?php echo $propiedad['estacionamientos'] ?></p>
                    </div>
                    <div class="icono">
                        <img class="icono__img" src="build/img/icono_dormitorio.svg" alt="">
                        <p class="icono__cantidad"><?php echo $propiedad['habitaciones'] ?></p>
                    </div>
                </div>
                <a class="propiedad__boton">Ver propiedad...</a>
            </div>
        </div>
    <?php endwhile; ?>

</div>