<header>
    <nav  class="menu navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="nav-link" href="{{'/'}}"> <img src="/img/logo.png" alt="Wolf" width="50px" height="50px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-auto">
          @guest
          <li class="nav-item active">
            <a class="nav-link" href="{{'/register'}}">REGISTRO <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{'/login'}}">INICIAR SESION <span class="sr-only">(current)</span></a>
          </li>
          @else
            <img src="/storage/{{Auth::user()->avatar}}" alt="" class="avatar">
          <li class="nav-item dropdown perfil">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Bienvenido {{ Auth::user()->name }}! <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{'/perfil'}}"> Perfil</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Cerrar Sesion
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
          </li>

          @auth
            @if (Auth::user()->is_admin)
              <li class="nav-item active">
                <a class="nav-link" href="{{'/agregarProducto'}}">AGREGAR PRODUCTOS <span class="sr-only">(current)</span></a>
              </li>
            @endif
          @endauth

          @endguest
          <li class="nav-item active">
            <a class="nav-link" href="{{'/faqs'}}">PREGUNTAS FRECUENTES <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="{{'/products'}}">PRODUCTOS<span class="sr-only">(current)</span></a>
          </li>

        </ul>
        @guest
          @else
          <div class="icocompra">
            <a href="{{'/carrito'}}"><i class="fas fa-shopping-cart"></i></a>
          </div>
        @endguest

      </div>
    </nav>
</header>
