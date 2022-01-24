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
    const prefiereDark = window.matchMedia('(prefers-color-scheme: dark)');
    // Obtiene el valor true si prefiere el dark
    // console.log(prefiereDark.matches);
    if (prefiereDark.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
    prefiereDark.addEventListener('click', () => {
        if (prefiereDark.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    })
    const btnDark = document.querySelector('.dark-mode-btn');
    btnDark.addEventListener('click', dark)
}

function dark() {
    document.body.classList.toggle('dark-mode');
}