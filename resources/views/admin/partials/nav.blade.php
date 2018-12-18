<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand logo-nav" href=""><img style="width: 35px" class="ml-5" src="{{ asset('recursos/logoSinFondo.png') }}" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <span class="navbar-text ml-5">
    ADMINISTRADOR
  </span>


  <div class="collapse navbar-collapse" id="navbarColor03">


    <ul class="navbar-nav ml-auto ">

  
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.category.index') }}">Categorias </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Productos </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pedidos </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuarios</a>
      </li>
      <li class="dropdown nav-item ">
          <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>  {{ Auth::user()->user }}</a>

        <ul class="dropdown-menu" role="menu">
          <li><a class="dropdown-item" href="{{ route('logout') }}"> Cerrar Sesión</a>
        </ul>
  		</li>

    </ul>
          
  </div>
</nav>