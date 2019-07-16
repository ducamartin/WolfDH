@extends('layouts.main')

@section('content')


<div class="container-fluid">

  <div class="registro">
    <div class="row justify-content-center">
      <img src="/img/PngLigas/carrito.png" alt="LOGO carrito Wolf" width="" height="180px">
    </div>
    <div class="row justify-content-start saludoUser">
      <h1>Bienvenido, {{ Auth::user()->name }}!</h1>
    </div>

    <div class="row justify-content-center">

          @foreach ($products as $product)
            <div class="cajacat1 col-xs-12 col-sm-5 col-md-3">
              <div class="card1 cardCam">
                <div id="ligaIng1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                      <img src="/storage/{{$product->product->imgProduct}}" class="d-block w-100" alt="">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#ligaIng1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#ligaIng1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="card-body">
                  <h5 class="card-title text-center">{{$product->product->name}}</h5>
                  <ul class="list-group">
                    <li class="precio text-center">$ {{$product->product->price}}</li>
                    <li class="list-item text-center">LIGA {{$product->product->league->name}}</li>
                    <li class="list-item text-center">MARCA {{$product->product->brand->name}}</li>
                    <li class="precio text-center">TALLE {{$product->product->size->name}}</li>
                    {{-- <li class="list-item text-center">DESCRIPCION <br> {{$product->product->description}}</li> --}}
                  </ul>
                  <form class="" action="/borrarCarrito" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <button type="submit" name="button" class="btn btn-danger">Eliminar del Carrito</button>
                  </form>
              </div>

            </div>

          @endforeach
    </div>

  </div>

</div>




@endsection
