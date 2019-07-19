
var numeros = /^[0-9]+$/;
var imagenTipo = /.[jpeg|jpg|png]$/;

window.onload = function(){

  var campoNombre = document.getElementById('name');
  var campoCalle = document.getElementById('street');
  var campoProv = document.getElementById('state');
  var campoCiudad = document.getElementById('town');
  var zipcode = document.getElementById('zipcode');
  var form = document.getElementById('perfil');
  console.log(form);
  var avatar = document.getElementById('avatar');
  var foto = avatar.files[0];

  campoNombre.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  campoCalle.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  campoProv.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  campoCiudad.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  zipcode.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  avatar.onfocus = function () {
      this.classList.remove('is-invalid');
  }

  form.onsubmit = function(event){

    if(campoNombre.value.trim()== '') {
      campoNombre.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo NOMBRE no puede estar vacio!';
      var div = campoNombre.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }else if (campoNombre.value.length < 3) {
      campoNombre.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo NOMBRE debe tener mas de tres letras!';
      var div = campoNombre.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(campoCalle.value== '') {
      campoCalle.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo DOMICILIO no puede estar vacio!';
      var div = campoCalle.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(campoCiudad.value== '') {
      campoCiudad.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo CIUDAD no puede estar vacio!';
      var div = campoCiudad.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(zipcode.value.trim()== '') {
      zipcode.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El Codigo Postal no puede estar vacio!';
      var div = zipcode.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }else if (!numeros.test(zipcode.value)) {
      zipcode.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El Codigo Postal no puede estar vacio!';
      var div = zipcode.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if (avatar.files.length == 0) {
      avatar.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Avatar no puede estar vacio!';
      var div = avatar.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }else if (!imagenTipo.test(avatar.value)) {
      avatar.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Avatar no tiene un formato soportado!';
      var div = avatar.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(campoProv.value == 0 ){
      campoProv.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'Debes seleccionar una Provincia!';
      var div = campoProv.parentElement;
      console.log(div);
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

  }

}
