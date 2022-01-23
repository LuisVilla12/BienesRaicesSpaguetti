document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
});

function eventListeners() {
    const menu = document.querySelector('.mobil_menu');
    menu.addEventListener('click', navegacion)
}

function navegacion() {
    const nav = document.querySelector('.nav');
    // Si la tiene la quita sino la elimina
    nav.classList.toggle('mostrar');

}