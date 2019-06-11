
@extends('layouts.main')

@section('content')
<div class="container-fluid registro">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrase') }}</div>

                <div class="card-body">
                  <form class="registro" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
 @csrf

              <div class="row justify-content-center">
                <div class="col-md-7">
                  <label for="name" class="col-md-6 col-form-label text-md-center">{{ __('Usuario') }}</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>


              <div class="form-group col-md-7">
                <label for="email" class="col-md-6 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


                <!--PASS  -->
                <div class="form-group col-md-7">
                  <label for="password" class="col-md-6 col-form-label text-md-center">{{ __('Contraseña') }}</label>

                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

                <!--CON PASS  -->
                <div class="form-group col-md-7">
                  <label for="password-confirm" class="col-md-6 col-form-label text-md-center">Confirmar password</label>

                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>




                <div class="form-group row mb-7">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" >
                            {{ __('Registrase') }}
                        </button>

                  </div>
                  </div>
                </div>
              </div>
            </form>


                        </div>
                    </form>
                </div>
            </div>

@endsection
