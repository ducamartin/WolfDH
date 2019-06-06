<header>
    <nav  class="menu navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="nav-link" href="{{'/'}}"> <img src="/img/logo.png" alt="Wolf" width="50px" height="50px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto">
          <?php
            if (empty($_SESSION['email'])) {
          ?>
          <li class="nav-item active">
            <a class="nav-link" href="{{'//pruebaRegistro'}}">REGISTRO <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{'/login'}}">INICIAR SESION <span class="sr-only">(current)</span></a>
          </li  class="nav-item active">
          <?php } else {?>
            <li class="nav-item active">
              <a class="nav-link" href="{{'/pruebaRegistro'}}"><?php if(isset($nombreUsuario)) echo "Bienvenido  {$nombreUsuario}" ?> <span class="sr-only">(current)</span></a>
            </li>
          <li>
            <a class="nav-link" href="{{'/cerrarSession'}}">CERRAR SESION <span class="sr-only">(current)</span></a>
          </li>
          <?php } ?>
          <li class="nav-item active">
            <a class="nav-link" href="{{'/faqs'}}">PREGUNTAS FRECUENTES <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{'/agregarProducto'}}">AGREGAR PRODUCTOS <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCTOS</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{'/spain'}}">Liga Española</a>
              <a class="dropdown-item" href="{{'/england'}}">Liga Inglesa</a>
              <a class="dropdown-item" href="{{'/france'}}">Liga Francesa</a>
              <a class="dropdown-item" href="{{'/italy'}}">Liga Italiana</a>
            </div>
          </li>
        </ul>
        <div class="icocompra">
          <i class="fas fa-shopping-cart"></i>
        </div>

      </div>
    </nav>
</header>
