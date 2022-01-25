<?php 
    // Importa las funciones
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h2 class="blogs__titulo mt-2">Nuestro blog</h2>
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
        <div class="blog">
            <div class="blog__maks">
                <picture>
                    <source srcset="build/img/blog3.avif" type="image/avif">
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <img class="blog__img" loading="lazy" src="build/img/blog3.jpg" alt="blog3">
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
                    <source srcset="build/img/blog4.avif" type="image/avif">
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <img class="blog__img" loading="lazy" src="build/img/blog4.jpg" alt="blog4">
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
    </main>

    <?php incluirTemplate('footer');?>