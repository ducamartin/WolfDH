window.onload = function () {

  var letrasNumeros = /^[a-zA-Z0-9._- ]+$/;
  var numeros = /^[0-9]+$/;
  var nombreProd = document.querySelector('#name');
  var precio = document.querySelector('#price');
  var marca = document.querySelector('#brand');
  var liga = document.querySelector('#league');
  var descripcion = document.querySelector('#description');
  var talle = document.querySelector('#size');

  formulario.onsubmit = function (event) {
    if (email.value.trim() == '') {
      email.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo EMAIL no puede estar vacio!';
      var div = email.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
    } else if (!regexEmail.test(email.value)) {
      email.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo EMAIL no tiene un formato valido!';
      var div = email.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }
  }
  if (this.value.trim() == '') {
    password.classList.add('is-invalid');
    var error = document.createElement('span');
    error.setAttribute('class','invalid-feedback');
    error.innerText = 'El campo PASSWORD no puede estar vacio!';
    var div = password.parentElement;
    if (div.children[2]) {
        div.removeChild(div.children[2]);
    }
    div.append(error);
    event.preventDefault();
  }


}
