@extends('layouts.main')

@section('content')

  <section>
    <article class="carrusel">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/img1.jpg" class="img1 img-fluid w-100 h-100" alt="...">
              <img src="img/img1a.jpg" class="imgA img-fluid w-100" alt="...">
              <img class="desc" src="img/30.png" alt="">
            </div>
            <div class="carousel-item">
              <img src="img/img2.jpg" class="img1 img-fluid w-100 h-100" alt="...">
              <img src="img/img2a.jpg" class="imgA img-fluid w-100" alt="...">
              <img class="ship" src="img/ship.png" alt="">
            </div>
            <div class="carousel-item">
              <img src="img/img3.jpg" class="img1 img-fluid w-100 h-100" alt="...">
              <img src="img/img3a.jpg" class="imgA img-fluid w-100" alt="...">
              <img class="prox" src="img/prox.png" alt="">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </article>


    <article class="container-fluid">
      <div class="row justify-content-center nosotros">
        <div class="info col-md-8">
          <br><br><br>
          <h1><strong>WOLF</strong></h1>
          <p>Estamos obsesionados por ofrecer la mejor experiencias de compra en internet. Estamos en constante contacto con las innovaciones y somos capaces de adaptarnos de forma rápida a los cambios, sean ellos internos, en el marcado o de nuestros clientes. Nacimos en el año 2000 con la creación de Wolf – una tienda físicas de calzado en la ciudad de San Pablo, Brasil. Con dos años de vida, llevamos nuestra tienda a Internet, ampliando nuestra presencia en el deporte y, en 2007, decidimos enfocar todos nuestros esfuerzos en una operación completamente online, hasta que hoy, esa vidriera virtual se ha convertido en el e-commerce de artículos deportivos más grande del mundo, con operaciones en Brasil, Argentina y México.</p>
          <img src="img/logo.png" alt="" width="100px" height="100px">
          <br><br><br>
        </div>
      </div>
    </article>
    <article class="">


      <div class="row ">

        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec1.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA ITALIANA</h4>
            </div> -->
          </div>
        </div>
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec2.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA ESPAÑOLA</h4>
            </div> -->
          </div>
        </div>
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec3.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA FRANCESA</h4>
            </div> -->
          </div>
        </div>
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec4.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA INGLESA</h4>
            </div> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec3.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA FRANCESA</h4>
            </div> -->
          </div>
        </div>
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec4.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA INGLESA</h4>
            </div> -->
          </div>
        </div>
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec1.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA ITALIANA</h4>
            </div> -->
          </div>
        </div>
        <div class="cajacat col-xs-12 col-sm-6 col-md-3">
          <div class="card">
            <a href="{{'products'}}"><img src="img/sec2.jpg" class="card-img-top" alt="..."></a>
            <!-- <div class="catLiga">
              <h4>LIGA ESPAÑOLA</h4>
            </div> -->
          </div>
        </div>
      </div>
    </article>
  </section>


@endsection
