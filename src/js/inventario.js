const listaVehiculos = document.querySelector('#flota');



function introducirVehiculo(e) {
    e.preventDefault();
    const vehiculo = {
        nombre: document.getElementById('nombre').value,
        capacidad: document.getElementById('capacidad').value,
        descripcion: document.getElementById('descripcion').value,
        color: document.getElementById('color').value,
        precio: document.getElementById('precio').value
    }
    if (e.target.classList.constains('guardar-vehiculo')) {
        insertarvehiculo(vehiculo)
    }
}

function insertarvehiculo(vehiculo) {
    const div = document.createElement('div');

    div.innerHTML = `
    <div class="tarjeta__imagen">
      <img src="../images/default.webp" width="40%" alt="${vehiculo.nombre}" class="flotaimg">
    </div>
    <div class="tarjeta__descripcion">
      <h2>Toyota</h2>
      <p><b>Capacidad maxima:</b>${vehiculo.capacidad}</p>
      <p><b>descripcion:</b> <br>${vehiculo.descripcion}</p>
      <p><b>colores:</b>#${vehiculo.color}</p>
      <p><b>precio*dia:</b>${vehiculo.precio}</p>
      <button class="cotizarbtn"><a href="#">Remover</a></button>
    </div>
  `

    listaVehiculos.appendChild(div);
}



/* leer datos del formulario */

const guardar = document.getElementById('guardar-vehiculo');
guardar.addEventListener('click', leerformulario)

function leerformulario(e) {

    e.preventDefault();
    let nombre = document.getElementById('nombre').value
    let capacidad = document.getElementById('capacidad').value
    let descripcion = document.getElementById('descripcion').value
    let color = document.getElementById('color').value
    let precio = document.getElementById('precio').value

    console.log(nombre);
    console.log(capacidad);
    console.log(descripcion);
    console.log(color);
    console.log(precio);
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