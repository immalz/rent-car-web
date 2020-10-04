const personas = document.getElementById('lista');


personas.addEventListener('click', eliminarUsuario);

function eliminarUsuario(e) {
    e.preventDefault();

    if (e.target.classList.contains('eliminarPersona')) {
        e.target.parentElement.parentElement.remove();
    }

}