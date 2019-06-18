@extends('layouts.main')

@section('content')
  <div class="container-fluid">

      <form class="registro" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
      @csrf

          <div class="row justify-content-center"><br>
            <h4>Registrate!</h4>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-7">
              <label for="name">Nombre</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <!--EMAIL  -->

            <div class="form-group col-md-7">
              <label for="email">Email</label>
              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <!--PASS  -->
            <div class="form-group col-md-7">
              <label for="password">Contraseña</label>
              <input id="password" type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <!--CON PASS  -->
            <div class="form-group col-md-7">
              <label for="password-confirm">Confirmar contraseña</label>
              <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
            </div>

            <div class="form-group col-md-7">
              <label for="avatar">Cargar imagen de Avatar</label>
              <input id="avatar" type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" >
              @error('avatar')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group col-md-7">
              <button type="submit">Enviar</button>
            </div>

          </div>
      </form>
  </div>
@endsection
