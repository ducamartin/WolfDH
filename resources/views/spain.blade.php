@extends('layouts.main')

@section('content')

  <div class="container-fluid">
      <div class="registro">
        <div class="row justify-content-center">
          <img src="img/PngLigas/LaLiga.png" alt="LOGO LIG ESPAÑA" width="300px" height="300px">
        </div>
        <div class="row justify-content-center">

          <!-- CAMISETA 1 -->
          <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
            <div class="card1 cardCam">
              <div id="ligaEsp1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="img/LigaEspanola/atl1.jpg" class="d-block w-100" alt="CAM ATL FRENTE">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/LigaEspanola/atl2.jpg" class="d-block w-100" alt="CAM ATL ESPALDA">
                  </div>
                  <div class="carousel-item">
                    <img src="img/LigaEspanola/atl3.jpg" class="d-block w-100" alt="CAM ATL ESCUDO">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#ligaEsp1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ligaEsp1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Camiseta<br>Atl. Madrid</h5>
              <ul class="list-group">
                <li class="precio text-center">$$$$</li>
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
          </div>


                                            <!--remera 2-->


          <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">
            <div class="card1 cardCam">
              <div id="ligaEsp2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="img/LigaEspanola/rea1.jpg" class="d-block w-100" alt="CAM REAL FRENTE">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/LigaEspanola/rea2.jpg" class="d-block w-100" alt="CAM REAL ESPALDA">
                  </div>
                  <div class="carousel-item">
                    <img src="img/LigaEspanola/rea3.jpg" class="d-block w-100" alt="CAM REAL ESCUDO">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#ligaEsp2" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ligaEsp2" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center"> Camiseta<br>Real Madrid</h5>
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
          </div>


                                            <!-- remera 3-->



          <div class="cajacat1 col-xs-8 col-sm-4 col-md-2">

            <div class="card1 cardCam">
              <div id="ligaEsp3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="img/LigaEspanola/bar1.jpg" class="d-block w-100" alt="CAM BAR FRENTE">
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="img/LigaEspanola/bar2.jpg" class="d-block w-100" alt="CAM BAR ESPALDA">
                  </div>
                  <div class="carousel-item">
                    <img src="img/LigaEspanola/bar3.jpg" class="d-block w-100" alt="CAM BAR ESCUDO">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#ligaEsp3" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ligaEsp3" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Camiseta<br>Fc Barcelona</h5>
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
          </div>





                                    <!-- ACÁ AGREGAR MÁS LUEGO-->



        </div>
      </div>
    </div>


@endsection
