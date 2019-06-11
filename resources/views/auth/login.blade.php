@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">

                    <form class="registro" method="post">
                      @csrf
                        <div class="row justify-content-center">
                          <h4>INICIO DE SESIÓN</h4>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                          <div class="form-group col-md-7">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-group col-md-7">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>


                          <div class="form-check col-md-7">
                            <input name="remember" id="remember" class="form-check-input" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                              Recordar mi dirección
                            </label>
                          </div>


                        </div>
                        <br>
                        <div class="row justify-content-center">
                          <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                      </form>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
