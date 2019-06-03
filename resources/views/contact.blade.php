@extends('layouts.main')

@section('content')


    <div class="container-fluid">
      <div class="row contacto justify-content-center">
        <h1>CONTACTO</h1>
      </div>
      <div class="row justify-content-center contacto">
        <div class="col-md-4">
          <div class="">
            <h3>Podes encontrarnos en</h3>
          </div>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3313139805828!2d-58.38386198468745!3d-34.62106686592359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima+1111%2C+C1073AAW+CABA!5e0!3m2!1ses-419!2sar!4v1554926092880!5m2!1ses-419!2sar" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class=" col-md-4">
          <div class="">
            <h3>Comunicate con nosotros</h3>
          </div>
          <form class="contacto">
            <div class="form-group">
              <label for="email" class="">Ingrese su Email</label>
              <input type="email" class="form-control" id="email" placeholder="nombre@DH.com">
            </div>
            <div class="form-group">
              <label for="comentario" class="">Dejanos tu comentario</label>
              <textarea class="form-control" id="comentario" rows="12"></textarea>
            </div>
            <div class="boton">
              <div class="form-group">
                <input type="submit" name="" value="enviar">
              </div>
            </div>
          </form>
        </div>

      </div>
      <section class="row justify-content-center contacto">
        <article class="col-md-7">
          <p >Nos encontras en LIMA 1111</p>
        </article>
        <article class="col-md-7">
          <h3> Seguinos en nuestras redes</h3>
          <div class= "cont-ico icocont">
            <a href= "https://www.facebook.com">  <i class="fab fa-facebook-f"></i> </a>
            <a href="https://www.instagram.com">  <i class="fab fa-instagram"></i> </a>
            <a href="https://www.twitter.com">  <i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com">  <i class="fab fa-youtube"></i></a>
          </div>
        </article>
      </section>

    </div>

@endsection
