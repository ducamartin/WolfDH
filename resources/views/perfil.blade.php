@extends('layouts.main')

@section('content')

<div class="container-fluid registro">

  <form method="post" action="" enctype="multipart/form-data">
      @csrf
      <div class="row justify-content-center"><br>
        <h2>Editar perfil</h2>


      </div>


     <div class="row justify-content-center">

       <div class="form-group col-md-3">
         <label for="avatar">Cargar imagen de Avatar</label>
         <input id="avatar" type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" >
         @error('avatar')
         <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror
       </div>

       <div class="col-md-4">
         <label for="name">Nombre</label>

         <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ Auth::user()->name }}" autocomplete="name" autofocus>

         @error('name')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
       </div>


       </div>

       <div class="row justify-content-center">

       <div class="form-group col-md-7">
         <label for="domicilio">Domicilio</label>
         <input type="text" class="form-control" id="domicilio" placeholder="">
       </div>


           <div class="form-group col-md-7">
             <label for="provincia">Provincia</label>
             <select id="provincia" class="form-control">
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
               <label for="localidad">Localiad/Ciudad</label>
               <input type="text" class="form-control" id="localidad" placeholder="">
             </div>

             <div class="form-group col-md-7">
               <label for="cp">Código Postal</label>
               <input type="text" class="form-control" id="cp">
             </div>

       <div class="form-group col-md-7">

       </div>




       <div class="form-group col-md-7">
         <button type="submit">Enviar</button>
       </div>

     </div>


       </form>


</div>














@endsection
