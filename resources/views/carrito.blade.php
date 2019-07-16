@extends('layouts.main')

@section('content')


<div class="container-fluid">

  <div class="registro">
    <div class="row justify-content-center">
      <h1>Tu Carrito</h1>
    </div>


    @foreach ($products as $product)
      <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
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

        </div>

        <form class="carrito" action="/borrarCarrito" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <button type="button" name="button" value="{{$product->id}}" class="btn btn-danger">Eliminar del Carrito</button>
        </form>


      </div>


    @endforeach
  </div>
    <script type="text/javascript">
    var botones = document.querySelectorAll('form.carrito button' );

    for (boton of botones) {
      boton.onclick = function(){
        let abuelo = this.parentElement.parentElement;
        let bisabuelo = this.parentElement.parentElement.parentElement;
        var id = this.value;


       fetch('http://localhost:8000/api/borrarCarrito/'+id)
        .then(function(response){
            return response.json();
        })
        .then(function(data){
          console.log(data)
          bisabuelo.removeChild(abuelo);
        })
        .catch(function(error){
            console.log(error)
        });


      }

    }

    </script>
      {{-- </div> --}}
  </div>

</div>




@endsection
