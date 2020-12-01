let nombre = document.getElementById('nombre');
let dni = document.getElementById('dni');
let age = document.getElementById('age');

let enviar = document.getElementById('enviar');

if (enviar != null) {
  enviar.addEventListener('click', (e) => {
    if (nombre.value === '') {
      e.preventDefault();
      let alerta = document.getElementById('alert');
      alerta.innerHTML = `
      <div class="alert alert-danger alert-dismissible" role="alert" id="alert">
        <strong>Datos Vacios</strong> Ingrese un nombre
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>`;
    } else if (dni.value === '') {
      e.preventDefault();
      let alerta = document.getElementById('alert');
      alerta.innerHTML = `
      <div class="alert alert-danger alert-dismissible" role="alert" id="alert">
        <strong>Datos Vacios</strong> Ingrese su DNI
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>`;
    } else if (age.value === '') {
      e.preventDefault();
      let alerta = document.getElementById('alert');
      alerta.innerHTML = `
      <div class="alert alert-danger alert-dismissible" role="alert" id="alert">
        <strong>Datos Vacios</strong> Ingrese una edad
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>`;
    }
  });
}
