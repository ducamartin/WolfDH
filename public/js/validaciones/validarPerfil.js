
var campoNombre = document.querySelector('input[name=name]');
var campoCalle = document.querySelector('input[name=street]');
var campoProv = document.querySelector('input[name=state]');
var campoCiudad = document.querySelector('input[name=town]');
var zipcode = document.querySelector('input[name=zipcode]');
var form = document.querySelector('#perfil');
var avatar = document.getElementById('avatar');




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
      }

      if(campoNombre.value.length < 3) {
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

      if(campoCalle.value.trim()== '') {
          campoCalle.classList.add('is-invalid');
          var error = document.createElement('span');
          error.setAttribute('class','invalid-feedback');
          error.innerText = 'El campo CALLE no puede estar vacio!';
          var div = campoCalle.parentElement;
          if (div.children[2]) {
              div.removeChild(div.children[2]);
          }
            div.append(error);
            event.preventDefault();
      }

      if(campoCiudad.value.trim()== '') {
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
      }


      if (avatar.files.length == 0 || !(/\.(jpg|png)$/i).test(foto.name)) {
        avatar.classList.add('is-invalid');
        var error = document.createElement('span');
        error.setAttribute('class','invalid-feedback');
        error.innerText = 'El campo Imagen no es imagen o esta vacio!';
        var div = avatar.parentElement;
        if (div.children[3]) {
            div.removeChild(div.children[3]);
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
