var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

function validarVacio(input) {
  if (input.value == '') {
    pintarError(input, 'Debe de estar lleno');
    return true;
  }
  return false
}

function pintarError(input, mensaje) {
  input.classList.add('is-invalid');
  var error = document.createElement('span');
  error.setAttribute('class','invalid-feedback');
  var strong = document.createElement('strong');
  strong.innerText = mensaje;
  var div = elemento.parentElement;
  if (div.children[2]) {
    div.removeChild(div.children[2]);
  }
  error.append(strong);
  div.append(error);
}

window.onload = function () {
    var form = document.querySelector('form');
    var email = document.querySelector('#email');
    var name = document.querySelector('#name');
    var password = document.querySelector('#password');
    var passwordConfirm = document.querySelector('#password-confirm');


    email.onfocus = function () {
        this.classList.remove('is-invalid');
    }
    email.onblur = function () {
      if (this.value.trim() == '') {
        email.classList.add('is-invalid');
        var error = document.createElement('span');
        error.setAttribute('class','invalid-feedback');
        error.innerText = 'El campo EMAIL no puede estar vacio!';
        var div = email.parentElement;
        if (div.children[2]) {
            div.removeChild(div.children[2]);
        }
        div.append(error);
      } else if (!regexEmail.test(this.value)) {
        email.classList.add('is-invalid');
        var error = document.createElement('span');
        error.setAttribute('class','invalid-feedback');
        error.innerText = 'El campo EMAIL no tiene un formato valido!';
        var div = email.parentElement;
        if (div.children[2]) {
            div.removeChild(div.children[2]);
        }
        div.append(error);
      }
    }

    name.onfocus = function () {
        this.classList.remove('is-invalid');
    }
    name.onblur = function () {
      if (this.value.trim() == '') {
        name.classList.add('is-invalid');
        var error = document.createElement('span');
        error.setAttribute('class','invalid-feedback');
        error.innerText = 'El campo NOMBRE no puede estar vacio!';
        var div = name.parentElement;
        if (div.children[2]) {
            div.removeChild(div.children[2]);
        }
        div.append(error);
      }
    }

    password.onfocus = function () {
        this.classList.remove('is-invalid');
    }
    password.onblur = function () {
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
      }
    }

    passwordConfirm.onfocus = function () {
        this.classList.remove('is-invalid');
    }
    passwordConfirm.onblur = function () {
      if (this.value.trim() == '') {
        passwordConfirm.classList.add('is-invalid');
        var error = document.createElement('span');
        error.setAttribute('class','invalid-feedback');
        error.innerText = 'El campo CONFIRMAR PASSWORD no puede estar vacio!';
        var div = passwordConfirm.parentElement;
        if (div.children[2]) {
            div.removeChild(div.children[2]);
        }
        div.append(error);
      }
    }


    form.onsubmit = function (event) {
        var elementos = this.elements;
        for (elemento of elementos) {
            if (elemento.type == 'submit' || elemento.type == 'hidden') {
                continue;
            }
            if (elemento.type != 'file' && validarVacio(elemento)) {
                event.preventDefault();
            }
            if (elemento.name == 'email' &&  !regexEmail.test(elemento.value)) {
                pintarError(elemento, 'Email invalido');
                event.preventDefault();
            }
            if (elemento.name == 'password') {
                var confirm = document.querySelector('#password-confirm');
                if (elemento.value.length < 8) {
                    pintarError(elemento, 'El password debe tener minimo 8 caracters');
                    event.preventDefault();
                } else if (elemento.value != confirm.value) {
                    pintarError(elemento, 'Los pass no coinciden');
                    event.preventDefault();
                }
            }
        }
    }
}
