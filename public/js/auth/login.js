window.onload = function () {
  var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var email = document.querySelector('#email');
  var password = document.querySelector('#password');
  var formulario = document.querySelector('form');

  // email.onfocus = function () {
  //     this.classList.remove('is-invalid');
  // }
  // email.onblur = function () {
  //   if (this.value.trim() == '') {
  //     email.classList.add('is-invalid');
  //     var error = document.createElement('span');
  //     error.setAttribute('class','invalid-feedback');
  //     error.innerText = 'El campo EMAIL no puede estar vacio!';
  //     var div = email.parentElement;
  //     if (div.children[2]) {
  //         div.removeChild(div.children[2]);
  //     }
  //     div.append(error);
  //   } else if (!regexEmail.test(this.value)) {
  //     email.classList.add('is-invalid');
  //     var error = document.createElement('span');
  //     error.setAttribute('class','invalid-feedback');
  //     error.innerText = 'El campo EMAIL no tiene un formato valido!';
  //     var div = email.parentElement;
  //     if (div.children[2]) {
  //         div.removeChild(div.children[2]);
  //     }
  //     div.append(error);
  //   }
  // }
  //
  // password.onfocus = function () {
  //     this.classList.remove('is-invalid');
  // }
  // password.onblur = function () {
  //   if (this.value.trim() == '') {
  //     password.classList.add('is-invalid');
  //     var error = document.createElement('span');
  //     error.setAttribute('class','invalid-feedback');
  //     error.innerText = 'El campo PASSWORD no puede estar vacio!';
  //     var div = password.parentElement;
  //     if (div.children[2]) {
  //         div.removeChild(div.children[2]);
  //     }
  //     div.append(error);
  //   }
  // }

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
