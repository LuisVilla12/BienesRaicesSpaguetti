<?php
// Importa las funciones
require 'includes/funciones.php';
incluirTemplate('header', $imagen = true);
?>
<div class="categorias">
    <h2 class="categorias__titulo">Más sobre nosotros</h2>
    <div class="categorias__grid contenedor">
        <div class="categoria">
            <div class="categoria__mask">
                <img class="categoria__img" src="build/img/icono1.svg" alt="seguridad">
            </div>
            <div class="categoria__contenido">
                <h2 class="categoria__titulo">Seguridad</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero dolore amet repellendus facilis itaque ipsam aliquam, consequatur nulla fugiat maiores?</p>
            </div>
        </div>
        <div class="categoria">
            <div class="categoria__mask">
                <img class="categoria__img" src="build/img/icono2.svg" alt="dinero">
            </div>
            <div class="categoria__contenido">
                <h2 class="categoria__titulo">Dinero</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero dolore amet repellendus facilis itaque ipsam aliquam, consequatur nulla fugiat maiores?</p>
            </div>
        </div>
        <div class="categoria">
            <div class="categoria__mask">
                <img class="categoria__img" src="build/img/icono3.svg" alt="tiempo">
            </div>
            <div class="categoria__contenido">
                <h2 class="categoria__titulo">Tiempo</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero dolore amet repellendus facilis itaque ipsam aliquam, consequatur nulla fugiat maiores?</p>
            </div>
        </div>
    </div>
</div>
<section class="propiedades">
    <h2 class="propiedades__titulo">Casas y departamentos a la venta</h2>
    <?php 
    $limite=3;
    require'includes/templates/anuncios.php';
    ?>
</section>

<section class="contactanos">
    <h2 class="contactanos__titulo">Encuentra la casa de tus sueños</h2>
    <p class="contactanos__descripcion">Llena el formulario de contacto y un asesor lo atendera a brevedad</p>
    <a href="#" class="contactanos__boton">Contactános</a>
</section>
<main class="contenedor principal">
    <div class="blogs">
        <h2 class="blogs__titulo">Nuestro blog</h2>
        <div class="blog">
            <div class="blog__maks">
                <picture>
                    <source srcset="build/img/blog1.avif" type="image/avif">
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <img class="blog__img" loading="lazy" src="build/img/blog1.jpg" alt="blog1">
                </picture>
            </div>
            <div class="blog__descripcion">
                <h3 class="blog__titulo">Terraza en el techo de tu casa</h3>
                <p class="blog__autor">Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>
                <p class="blog__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque aut necessitatibus eius sint omnis itaque!</p>
            </div>
        </div>
        <div class="blog">
            <div class="blog__maks">
                <picture>
                    <source srcset="build/img/blog2.avif" type="image/avif">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <img class="blog__img" loading="lazy" src="build/img/blog2.jpg" alt="blog2">
                </picture>
            </div>
            <div class="blog__descripcion">
                <h3 class="blog__titulo">Terraza en el techo de tu casa</h3>
                <p class="blog__autor">Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>
                <p class="blog__texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque aut necessitatibus eius sint omnis itaque!</p>
            </div>
        </div>
    </div>
    <div class="testimonial">
        <h2 class="testimonial__titulo">testimoniales</h2>
        <div class="testimonial__contenido">
            <p class="testimonial__texto">El personal se comporto de una manera excelente, de igual manera la atención brindada cumple mis expectativas </p>
            <p class="testimonial__autor">-Luis Villa</p>
        </div>
    </div>
</main>
<?php incluirTemplate('footer'); ?>