var letrasNumeros = /^[a-zA-Z0-9._-]+$/;
var numeros = /^[0-9]+$/;
var tipoImagen = /.[jpeg|jpg|png]$/;

window.onload = function () {
  var formulario = document.querySelector('#formulario');
  var name = document.querySelector('#name');
  var price = document.querySelector('#price');
  var brand = document.querySelector('#brand');
  var league = document.querySelector('#league');
  var description = document.querySelector('#description');
  var size = document.querySelector('#size');
  var imgProduct = document.querySelector('#imgProduct');
  console.log(formulario);


  // formulario.onsubmit = function (event) {
  //
  //   if (name.value.trim() == '') {
  //     name.classList.add('is-invalid');
  //     var error = document.createElement('span');
  //     error.setAttribute('class','invalid-feedback');
  //     error.innerText = 'El campo NOMBRE no puede estar vacio!';
  //     var div = name.parentElement;
  //     if (div.children[2]) {
  //         div.removeChild(div.children[2]);
  //     }
  //     div.append(error);
  //     event.preventDefault();
  //   }
  //
  //   if (price.value.trim() == '') {
  //     price.classList.add('is-invalid');
  //     var error = document.createElement('span');
  //     error.setAttribute('class','invalid-feedback');
  //     error.innerText = 'El campo PRECIO no puede estar vacio!';
  //     var div = price.parentElement;
  //     if (div.children[2]) {
  //         div.removeChild(div.children[2]);
  //     }
  //     div.append(error);
  //     event.preventDefault();
  //   }
  //
  //   if (description.value.trim() == '') {
  //     description.classList.add('is-invalid');
  //     var error = document.createElement('span');
  //     error.setAttribute('class','invalid-feedback');
  //     error.innerText = 'El campo DESCRIPCION no puede estar vacio!';
  //     var div = description.parentElement;
  //     if (div.children[2]) {
  //         div.removeChild(div.children[2]);
  //     }
  //     div.append(error);
  //     event.preventDefault();
  //   }
  //
  //   if (imgProduct.value) {
  //
  //   }
  // }


}
