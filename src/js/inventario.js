const listaVehiculos = document.querySelector('#flota');
const formulario = document.getElementById('formulario');



/*----OBTENER DATOS DEL FORMULARIO----*/
const guardar = document.getElementById('guardar-vehiculo');
guardar.addEventListener('click', leerformulario)

function leerformulario(e) {
    e.preventDefault();
    let nombre = document.getElementById('nombre').value
    let capacidad = document.getElementById('capacidad').value
    let descripcion = document.getElementById('descripcion').value
    let color = document.getElementById('color').value
    let precio = document.getElementById('precio').value

    if ((nombre == "") || (capacidad == "") || (descripcion == "") || (color == "") || (precio == "")) {
        alert("Los campos no pueden quedar vacios");
        return true;
    } else {
        const vehiculo = {
            nombre: nombre,
            capacidad: capacidad,
            descripcion: descripcion,
            color: color,
            precio: precio
        };
        formulario.reset();
        insertarvehiculo(vehiculo);
    }

}
/*-------INSERTAR VEHICULO-------*/
function insertarvehiculo(vehiculo) {
    const div = document.createElement('div');
    div.className += "tarjeta";

    div.innerHTML = `
            <div class="tarjeta__imagen">
                <img src="../images/default.webp" width="40%" alt="${vehiculo.nombre}" class="flotaimg">
            </div>
            <div class="tarjeta__descripcion">
                <h2>${vehiculo.nombre}</h2>
                <p><b>Capacidad maxima:</b>${vehiculo.capacidad}</p>
                <p><b>descripcion:</b> <br>${vehiculo.descripcion}</p>
                <p><b>colores:</b>${vehiculo.color}</p>
                <p><b>precio*dia:</b>${vehiculo.precio}</p>
                <button><a class="eliminar" href="#">Remover</a></button>
            </div>`
    listaVehiculos.appendChild(div);
}

/*-------ELIMINAR VEHICULO-------*/

const vehiculos = document.getElementById('flota');
vehiculos.addEventListener('click', eliminarVehiculo);

function eliminarVehiculo(e) {
    e.preventDefault();
    if (e.target.classList.contains('eliminar')) {
        e.target.parentElement.parentElement.parentElement.remove();
    }
}