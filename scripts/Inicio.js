window.addEventListener('load', () => {
    const enlaces = document.querySelectorAll('#catalogo a');
    enlaces.forEach( (elemento) => {
            elemento.addEventListener('click', (evento) => {
            evento.preventDefault();
            enlaces.forEach((enlace) => enlace.classList.remove('Activo'));
            evento.target.classList.add('Activo');
        });
    });  
});




