document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
    darkMode();
});

function eventListeners() {
    const menu = document.querySelector('.mobil_menu');
    // Cuando se da click se invoca la funcion de navegacion
    menu.addEventListener('click', navegacion)
}

function navegacion() {
    const nav = document.querySelector('.nav');
    // Si la tiene la quita sino la elimina
    nav.classList.toggle('mostrar');
}

function darkMode() {
    const btnDark = document.querySelector('.dark-mode-btn');
    btnDark.addEventListener('click', dark)
}

function dark() {
    // Añade la clase de dark-mode a todo el html
    document.body.classList.toggle('dark-mode');
}