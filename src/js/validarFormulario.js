let usuario = document.getElementById('usuario');
let contraseña = document.getElementById('contraseña');
let enviar = document.getElementById('enviar');


let form = document.getElementById('formulario');

form.addEventListener('submit', function(evt) {
    evt.preventDefault();


    if (usuario.value === 'marcoalz' && contraseña.value === 'visitante') {
        alert('usuario correcto')
    } else {
        alert('Usuario Incorrecto, intentelo de nuevo');
    }
})