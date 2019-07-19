@extends('layouts.main')

@section('content')
  @php
    $sumaPrecio=0;
    $sumaProductos=0;
  @endphp


<div class="container-fluid">

  <div class="registro">
    <div class="row justify-content-center">
      <img src="/img/PngLigas/carrito.png" alt="LOGO carrito Wolf" id="logoCarrito">
    </div>
    <div class="row justify-content-start saludoUser">
      <h1>Bienvenido, {{ Auth::user()->name }}!</h1>
    </div>

    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 col-md-6 justify-content-center">
        <div class="row justify-content-center">
          @foreach ($products as $product)
            <div class="cajacat1 col-xs-10 col-sm-8 col-md-5 justify-content-center">
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
                <button id="eliminarCarrito" type="button" name="button" value="{{$product->id}}" class="btn btn-danger">Eliminar del Carrito</button>
              </form>


            </div>



            {{-- <------------------------> --}}
            @php
              $precioTotal[]= $product->product->price;
              $sumaPrecio = array_sum($precioTotal);
              $productosTotal[]= $product->product->cantProd;
              $sumaProductos = array_sum($productosTotal);
            @endphp
            {{-- <------------------------> --}}

          @endforeach

        </div>
      </div>

      {{-- <------------------------> --}}
      <div class="col-xs-12 col-sm-10 col-md-6 " font-size="10px">
        <div class="cajacat1 totalCarrito d-flex align-content-around flex-wrap">
          <div class="col-12">
            <h3>Resumen del Pedido</h3>
          </div>
          <div class="col-12">
            <h4>Cantidad de Productos Seleccionados: {{$sumaProductos}} Unidades</h4>
          </div>
          @foreach ($products as $product)
            <div class="row col-12">
              <div class="col-8">
                <h4>{{$product->product->name}}</h4>
              </div>
              <div class="col-4 justify-content-end">
                <h4>$ {{$product->product->price}}</h4>
              </div>
            </div>
          @endforeach
          <div class="row col-12">
            <div class="col-8">
              <h4 style="color:red">PRECIO TOTAL:</h4>
            </div>
            <div class="col-4">
              <h4 style="color:red">$ {{$sumaPrecio}}</h4>
            </div>




          </div>
          </ul>
        </div>
      </div>
      {{-- <------------------------> --}}

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
         alert('PRODUCTO ELIMINADO DEL CARRITO. POR FAVOR REFRESQUE LA PAGINA');
          location.reload(true);

        })
        .catch(function(error){
            console.log(error)
        });


      }

    }

    </script>
  </div>

</div>




@endsection
