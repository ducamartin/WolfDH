@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="registro">
      <div class="row justify-content-center">
        <img src="img/PngLigas/ligainglesa.png" alt="LOGO LIG INGLATERRA" width="300px" height="300px">
      </div>

      @if (session('mensaje'))
         <div class="alert alert-success">
             {{ session('mensaje') }}
         </div>
      @endif


                                            <!-- REMERA 1 -->


      <div class="row justify-content-center">
        @foreach ($products as $product)
        <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
          <div class="card1 cardCam">
            <div id="ligaIng1" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <img src="img/LigaInglesa/man1.jpg" class="d-block w-100" alt="CAM MANU FRENTE">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/LigaInglesa/man2.jpg" class="d-block w-100" alt="CAM MANU ESPALDA">
                </div>
                <div class="carousel-item">
                  <img src="img/LigaInglesa/man3.jpg" class="d-block w-100" alt="CAM MANU ESCUDO">
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
                <li class="list-item text-center">{{$product->description}}</li>
              </ul>
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                <option selected>Talle..</option>
                <option value="1">Small</option>
                <option value="2">Medium</option>
                <option value="3">Large</option>
                <option value="4">X Large</option>
              </select>
              <div class="botonCarrito">
                <button type="button" class="btn btn-dark">Agregar al Carro</button>
              </div>
              <div class="botonCarrito">
                <a class="btn btn-success" href="/edit/{{$product->id}}">Editar</a>
              </div>
          </div>
        </div>
      @endforeach

              <!--remera 2-->

        {{-- <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
          <div class="card1 cardCam">
            <div id="ligaIng2" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <img src="img/LigaInglesa/liv1.jpg" class="d-block w-100" alt="CAM LIV FRENTE ">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/LigaInglesa/liv2.jpg" class="d-block w-100" alt="CAM LIV ESPALDA">
                </div>
                <div class="carousel-item">
                  <img src="img/LigaInglesa/liv3.jpg" class="d-block w-100" alt="CAM LIV ESCUDO">
                </div>
              </div>
              <a class="carousel-control-prev" href="#ligaIng2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#ligaIng2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center"> Camiseta<br>Liverpool</h5>
            <ul class="list-group">
              <li class="text-center">$$$$</li>
              <li class="list-item text-center">Primera equipacion</li>
            </ul>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected>Talle..</option>
              <option value="1">Small</option>
              <option value="2">Medium</option>
              <option value="3">Large</option>
              <option value="4">X Large</option>
            </select>
            <div class="botonCarrito">
              <button type="button" class="btn btn-dark">Agregar al Carro</button>
            </div>
          </div>
        </div> --}}

                    <!-- remera 3-->

        {{-- <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
          <div class="card1 cardCam">
            <div id="ligaIng3" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <img src="img/LigaInglesa/che1.jpg" class="d-block w-100" alt="CAM CHE FRENTE">
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="img/LigaInglesa/che2.jpg" class="d-block w-100" alt="CAM CHE ESPALDA">
                </div>
                <div class="carousel-item">
                  <img src="img/LigaInglesa/che3.jpg" class="d-block w-100" alt="CAM CHE ESCUDO">
                </div>
              </div>
              <a class="carousel-control-prev" href="#ligaIng3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#ligaIng3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Camiseta<br>Chelsea</h5>
            <ul class="list-group">
              <li class="precio text-center">$$$$</li>
              <li class="list-item text-center">Primera Equipacion</li>
            </ul>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected>Talle..</option>
              <option value="1">Small</option>
              <option value="2">Medium</option>
              <option value="3">Large</option>
              <option value="4">X Large</option>
            </select>
            <div class="botonCarrito">
              <button type="button" class="btn btn-dark">Agregar al Carro</button>
            </div>
          </div>
        </div> --}}


                                <!-- ACÁ AGREGAR MÁS LUEGO-->


      </div>
    </div>
  </div>



@endsection
