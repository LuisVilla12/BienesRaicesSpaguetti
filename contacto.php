<?php 
    // Importa las funciones
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor contacto">
        <h1 class="contacto__titulo">Contactanos</h1>
        <picture>
            <source srcset="build/img/destacada3.avif" type="image/avif">
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="formulario" class="contacto__img">
        </picture>
        <h2 class="contacto__subtitulo">Conteste el formulario</h2>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>
                <div class="campo">
                    <label class="campo__label" for="nombre">Nombre:</label>
                    <input class="campo__input" type="text" placeholder="Ingrese su nombre" id="nombre">
                </div>
                <div class="campo">
                    <label class="campo__label" for="email">Email: </label>
                    <input class="campo__input" type="email" id="email" placeholder="Ingese su correo electronico">
                </div>
                <div class="campo">
                    <label class="campo__label" for="numeroTel">N° Telefonico: </label>
                    <input class="campo__input" type="number" id="numeroTel" placeholder="Ingese su n° telefonico">
                </div>
                <div class="campo">
                    <label class="campo__label" for="mensaje">Mensaje: </label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>Informacion de la propiedad</legend>
                <div class="campo">
                    <label class="campo__label" for="opciones"> Vende o compra </label>
                    <select name="" id="opciones" class="campo__input">
                        <option value="" selected disabled>--Sin seleccionar--</option>
                        <option value="vende">Vende</option>
                        <option value="compra">Compra</option>
                    </select>
                </div>
                <div class="campo">
                    <label class="campo__label" for="cantidad">Precio o Presupuesto: </label>
                    <input class="campo__input" type="number" id="cantidad" placeholder="Ingese la cantidad">
                </div>
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <div class="campo">
                    <p>Como desea ser contactado</p>
                    <div class="campo__radios">
                        <div class="campo__radio">
                            <label class="campo__label" for="telefono">Telefono:</label>
                            <input name="contacto" type="radio" value="telefono" id="telefono">
                        </div>
                        <div class="campo__radio">
                            <label class="campo__label" for="E-mail">E-mail:</label>
                            <input name="contacto" type="radio" value="E-mail" id="E-mail">
                        </div>
                    </div>
                    <div class="campo">
                        <label class="campo__label" for="fecha">Fecha: </label>
                        <input class="campo__input" type="date" id="fecha">
                    </div>
                    <div class="campo">
                        <label class="campo__label" for="hora">Hora: </label>
                        <input class="campo__input" type="time" id="hora">
                    </div>
                </div>
            </fieldset>
            <input type="submit" value="Enviar" class="btn-enviar">
        </form>

    </main>

    <?php incluirTemplate('footer');?>