@extends('layouts.main')

@section('content')

<div class="container-fluid registro">
  <form method="post" action="/perfil" enctype="multipart/form-data">
      @csrf
      <div class="row justify-content-center"><br>
        <h2>Editar perfil</h2>
      </div>
      <div class="row justify-content-center">

        @if (session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje') }}
        </div>
        @endif

      </div>

      <div class="row justify-content-center">

        <div class="form-group col-md-3">
          <label for="avatar">Cambiar Avatar</label>
          <img src="/storage/{{Auth::user()->avatar}}" alt="" class="avatar">
          <input id="avatar" type="file" name="avatar" class="form-control" >
          @error('avatar')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
       </div>

        <div class="col-md-4">
           <label for="name">Nombre</label>
           <input class="form-control" type="text" name="name" id="name" value="{{ Auth::user()->name }}">
           @error('name')
             <div class="alert alert-danger">{{ $message }}</div>
          @enderror
       </div>

      </div>

      <div class="row justify-content-center">

        <div class="form-group col-md-7">
           <label for="street">Domicilio</label>
           <input type="text" class="form-control" id="street" name="street" value="{{ Auth::user()->street }}">
         </div>
        <div class="form-group col-md-7">
           <label for="state">Provincia</label>
           <select id="state" name="state" class="form-control" value="{{ Auth::user()->state }}">
                 <option selected>Elegir...</option>
                 <option>Buenos Aires</option>
                 <option>Ciudad Autónoma de Buenos Aires</option>
                 <option>Catamarca</option>
                 <option>Chaco</option>
                 <option>Chubut</option>
                 <option>Córdoba</option>
                 <option>Corrientes</option>
                 <option>Entre Rios</option>
                 <option>Formosa</option>
                 <option>Jujuy</option>
                 <option>La Pampa</option>
                 <option>La Rioja</option>
                 <option>Mendoza</option>
                 <option>Misiones</option>
                 <option>Neuquén</option>
                 <option>Rio Negro</option>
                 <option>Salta</option>
                 <option>San Juan</option>
                 <option>San Luis</option>
                 <option>Santa Cruz</option>
                 <option>Santa Fe</option>
                 <option>Santiago del Estero</option>
                 <option>Tierra del Fuego</option>
                 <option>Tucuman</option>
             </select>
          </div>

        <div class="form-group col-md-7">
           <label for="town">Localiad/Ciudad</label>
           <input type="text" class="form-control" id="town" name="town" placeholder="" value="{{ Auth::user()->town}}">
         </div>

        <div class="form-group col-md-7">
           <label for="codezip">Código Postal</label>
           <input type="text" class="form-control" id="codezip" name="codezip" value="{{ Auth::user()->codezip}}">
         </div>

        <div class="form-group col-md-7">
           <button type="submit">Enviar</button>
         </div>

     </div>
  </form>
</div>


<script type="text/javascript" src="/js/validaciones/validarPerfil.js"></script>



@endsection
