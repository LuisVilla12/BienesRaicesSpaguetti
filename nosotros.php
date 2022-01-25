<?php 
    // Importa las funciones
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="nosotros">
        <h2 class="nosotros__titulo">Conoce más sobre nosotros</h2>
        <div class="nosotros__grid contenedor">
            <div class="nosotros__img">
                <picture>
                    <source srcset="build/img/nosotros.avif" type="image/avif">
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="nosotros">
                </picture>
            </div>
            <div class="nosotros__texto">
                <h3>25 años de experiencia</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, recusandae enim fugiat laudantium placeat magnam temporibus id tempore quod molestias?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, recusandae enim fugiatlaudantiumplaceatmagnamtemporibus,
                    id tempore quod molestias?</p>
            </div>
        </div>
    </main>
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
    <?php incluirTemplate('footer');?>