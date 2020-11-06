/*-------ELIMINAR VEHICULO-------*/

const reserva = document.getElementById('reserva');
reserva.addEventListener('click', cancelarReserva);

function cancelarReserva(e) {
    e.preventDefault();
    if (e.target.classList.contains('eliminar')) {
        e.target.parentElement.parentElement.parentElement.remove();
    }
}