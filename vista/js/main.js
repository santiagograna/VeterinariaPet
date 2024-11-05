/* recoleccion de los datos enviados por el formulario para
validar el login*/

(function () {
    'use strict'
  
    var forms = document.querySelectorAll('#formLogin')
  
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault()
          if (!form.checkValidity()) {
            event.stopPropagation()
            form.classList.add('was-validated')
          } else {
            let documento = document.getElementById("txt-documento").value;
            let password = document.getElementById("txt-password").value;
            let objData = {"iniciarSesion":"ok", "documento":documento, "password":password};
            let objUsuario = new Usuario(objData);
            objUsuario.iniciarSesion();
          }
  
        }, false)
      })
  })();

