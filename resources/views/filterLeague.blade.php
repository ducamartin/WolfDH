@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="registro">
      <div class="row justify-content-center">
        <img src="/img/PngLigas/ligainglesa.png" alt="LOGO LIG INGLATERRA" width="300px" height="300px">
      </div>

      <form class="" action="" method="get">
         <input type="text" name="name" value="" class="form-control">
         <button type="submit" class="btn btn-primary">Buscar</button>
      </form>


      @if (session('mensaje'))
         <div class="alert alert-success">
             {{ session('mensaje') }}
         </div>
      @endif

      <div class="card" style="width: 18rem;">
        <div class="card-header">
          CATEGORIAS - Ligas
        </div>
        <ul class="list-group list-group-flush">

          {{-- ACA TUVE QUE PONER '$catLeague' Y NO '$league' PORQUE SINO SE PISABA CON CON LO DE ABAJO --}}
          @foreach ($leagues as $catLeague)
            <a href="/products/{{$catLeague->id}}">{{ $catLeague->name }}</a><br>
          @endforeach
        </ul>
      </div>

      <div class="row justify-content-center">

        @foreach ($league->products as $product)
        <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
          <div class="card1 cardCam">
            <div id="ligaIng1" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <img src="/storage/{{$product->imgProduct}}" class="d-block w-100" alt="CAM MANU FRENTE">
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
              <h5 class="card-title text-center">{{$product->name}}</h5>
              <ul class="list-group">
                <li class="precio text-center">$ {{$product->price}}</li>
                <li class="list-item text-center">LIGA {{$product->league->name}}</li>
                <li class="list-item text-center">MARCA {{$product->brand->name}}</li>
                <li class="precio text-center">TALLE {{$product->size->name}}</li>
                <li class="list-item text-center">DESCRIPCION <br> {{$product->description}}</li>
              </ul>
              <form class="" action="/agregarCarrito" method="post">
                @csrf
                <div class="botonCarrito">
                  <button type="submit" name="product_id"  value="{{$product->id}}" class="btn btn-dark">Agregar al Carro</button>
                </div>
              </form>
              <div class="botonCarrito">
                <a class="btn btn-success" href="/edit/{{$product->id}}">Editar</a>
              </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>

@endsection
