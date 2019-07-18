var campoNombre = document.querySelector('input[name=name]');
var campoCalle = document.querySelector('input[name=street]');
var campoProv = document.querySelector('input[name=state]');
var campoCiudad = document.querySelector('input[name=town]');
var campoAvatar = document.querySelector();



campoNombre.onblur = function (){
    if(this.value.trim()== '') {
        alert('el campo nombre no puede estar vacio');
    }
    else if (this.value.length < 3) {
        alert('el campo nombre debe tener mas de 3 letras');
    }
}
