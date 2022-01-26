<?php 
    // Importa las funciones
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor">
        <h1 class="admin__titulo">Nueva propiedad</h1>
        <a href="/Admin" class="btn">Volver</a>
        <form action="" class="formulario">
            <fieldset>
                <legend>Informacion general</legend>
                <div class="campo">
                    <label class="campo__label" for="titulo">Titulo: </label>
                    <input class="campo__input" type="text" id="titulo" placeholder="Ingrese el titulo de la propiedad">
                </div>
                <div class="campo">
                    <label class="campo__label" for="precio">Precio: </label>
                    <input class="campo__input" type="number" id="precio" placeholder="Ingrese el precio de la propiedad">
                </div>
                <div class="campo">
                    <label class="campo__label" for="imagen">Imagen: </label>
                    <input class="campo__input" type="file" id="imagen" accept="image/jpeg,image/png">
                </div>
                <div class="campo">
                    <label class="campo__label" for="descripcion">Descripcion: </label>
                    <textarea name="descripcion" id="descripcion" ></textarea>
                </div>
            </fieldset>
            <fieldset>
                <legend>Información de la propiedad</legend>
                <div class="campo">
                    <label class="campo__label" for="habitaciones">Habitaciones: </label>
                    <input class="campo__input" type="number" id="habitaciones" placeholder="Ingrese el n° de habitaciones" min="1">
                </div>
                <div class="campo">
                    <label class="campo__label" for="wc">wc: </label>
                    <input class="campo__input" type="number" id="wc" placeholder="Ingrese el n° de baños" min="1">
                </div>
                <div class="campo">
                    <label class="campo__label" for="estacionamientos">Estacionamientos: </label>
                    <input class="campo__input" type="number" id="estacionamientos" placeholder="Ingrese el n° de estacionamientos" min="1">
                </div>
            </fieldset>
            <fieldset>
                <legend>Información del vendedor</legend>
                <select name="" id="" class="campo__input" >
                    <option value="0">--Sin seleccionar --</option>
                    <option value="1">Luis Villa</option>
                    <option value="2">Moises</option>
                </select>
            </fieldset>
            <input type="submit" value="Registrar" class="btn-enviar">
        </form>
    </main>
    
<?php incluirTemplate('footer');?>