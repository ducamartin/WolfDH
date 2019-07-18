var letrasNumeros = /^[a-zA-Z 0-9._-]+$/;
var numeros = /^[0-9]+$/;
var imagenTipo = /.[jpeg|jpg|png]$/;

window.onload = function () {
  var formulario = document.querySelector('#formulario');
  var name = document.getElementById('name');
  var price = document.getElementById('price');
  var brand = document.getElementById('brand');
  var league = document.getElementById('league');
  var description = document.getElementById('description');
  var size = document.getElementById('size');
  var imgProduct = document.getElementById('imgProduct');
  var foto = imgProduct.files[0];

  name.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  price.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  brand.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  league.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  description.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  size.onfocus = function () {
      this.classList.remove('is-invalid');
  }
  imgProduct.onfocus = function () {
      this.classList.remove('is-invalid');
  }

  formulario.onsubmit = function (event) {

    if (name.value.trim() == '') {
      name.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo NOMBRE no puede estar vacio!';
      var div = name.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }else if (!letrasNumeros.test(name.value)) {
      name.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo NOMBRE no puede tener carácteres especiales!';
      var div = name.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if (price.value.trim() == '') {
      price.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo PRECIO no puede estar vacio!';
      var div = price.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }else if (!numeros.test(price.value)) {
      price.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo PRECIO solo puede contener carácteres numéricos!';
      var div = price.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if (description.value == '') {
      description.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo DESCRIPCION no puede estar vacio!';
      var div = description.parentElement;
      if (div.children[2]) {
        div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if (imgProduct.files.length == 0) {
      imgProduct.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Imagen no puede estar vacio!';
      var div = imgProduct.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }else if (!imagenTipo.test(imgProduct.value)) {
      imgProduct.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Imagen no tiene un formato soportado!';
      var div = imgProduct.parentElement;
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(brand.value == 0 ){
      brand.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Imageen no es imagen o esta vacio!';
      var div = brand.parentElement;
      console.log(div);
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(league.value == 0 ){
      league.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Imageen no es imagen o esta vacio!';
      var div = league.parentElement;
      console.log(div);
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }

    if(size.value == 0 ){
      size.classList.add('is-invalid');
      var error = document.createElement('span');
      error.setAttribute('class','invalid-feedback');
      error.innerText = 'El campo Imageen no es imagen o esta vacio!';
      var div = size.parentElement;
      console.log(div);
      if (div.children[2]) {
          div.removeChild(div.children[2]);
      }
      div.append(error);
      event.preventDefault();
    }
  }
}
