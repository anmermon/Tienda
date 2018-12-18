<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand logo-nav" href="{{ route('home')}}"><img class="ml-5" src="{{ asset('recursos/logoSinFondo.png') }}" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <span class="navbar-text ml-5">
    Pide lo que quieras, nosotros te lo llevamos
  </span>


  <div class="collapse navbar-collapse" id="navbarColor03">


    <ul class="navbar-nav ml-auto ">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i> Carrito</a>
      </li>

      @include('tienda.partials.menu-user')



      <li class="nav-item">
        <a class="nav-link" href="#">Conocenos </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
  

    </ul>

  </div>
</nav>