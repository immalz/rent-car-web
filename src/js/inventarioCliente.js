const listaVehiculos = document.querySelector('#flota');
document.addEventListener('DOMContentLoaded', leerLocalStorage);
function obtenerVehiculosLocalStorage() {
    let vehiculosLS;

    if(localStorage.getItem('vehiculos') === null) {
        vehiculosLS = [];
    } else {
        vehiculosLS = JSON.parse(localStorage.getItem('vehiculos'));
    }

    return vehiculosLS;
}
function leerLocalStorage() {
    let vehiculosLS;
    vehiculosLS = obtenerVehiculosLocalStorage();
    vehiculosLS.forEach(function (vehiculo) {
        const div = document.createElement('div');
        div.className += "tarjeta";
    
        div.innerHTML = `
                <div class="tarjeta__imagen">
                    <img src="../images/default.webp" width="40%" alt="${vehiculo.nombre}" class="flotaimg">
                </div>
                <div class="tarjeta__descripcion">
                <h2 id="vehiculo">${vehiculo.nombre}</h2>
                    <p><b>Capacidad maxima:</b>${vehiculo.capacidad}</p>
                    <p><b>descripcion:</b> <br>${vehiculo.descripcion}</p>
                    <p><b>colores:</b>${vehiculo.color}</p>
                    <p><b>precio*dia:</b>${vehiculo.precio}</p>
                    <button class="cotizarbtn"><a href="#">Remover</a></button>
                </div>`
        listaVehiculos.appendChild(div);
    });
}