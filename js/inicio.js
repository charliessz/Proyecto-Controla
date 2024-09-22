function actualizarReloj() {
    const tiempo = document.getElementById('tiempo');
    const fecha = document.getElementById('fecha');
    const ahora = new Date();

    const horas = ahora.getHours().toString().padStart(2, '0');
    const minutos = ahora.getMinutes().toString().padStart(2, '0');
    const segundos = ahora.getSeconds().toString().padStart(2, '0');

    tiempo.textContent = `${horas}:${minutos}:${segundos}`;

    const opcionesFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    fecha.textContent = ahora.toLocaleDateString('es-ES', opcionesFecha);
}

setInterval(actualizarReloj, 1000);
actualizarReloj();

let indice = 0;

function moverIzquierda() {
    const items = document.querySelector('.carrusel-items');
    const totalItems = items.children.length;
    if (indice > 0) {
        indice--;
    } else {
        indice = totalItems - 1;
    }
    actualizarCarrusel();
}

function moverDerecha() {
    const items = document.querySelector('.carrusel-items');
    const totalItems = items.children.length;
    if (indice < totalItems - 1) {
        indice++;
    } else {
        indice = 0;
    }
    actualizarCarrusel();
}

function actualizarCarrusel() {
    const items = document.querySelector('.carrusel-items');
    const indicadores = document.querySelectorAll('.indicador');
    items.style.transform = `translateX(-${indice * 100}%)`;
    indicadores.forEach((indicador, i) => {
        if (i === indice) {
            indicador.classList.add('activo');
        } else {
            indicador.classList.remove('activo');
        }
    });
}