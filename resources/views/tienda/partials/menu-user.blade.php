@if(Auth::check())
	      <li class="dropdown nav-item ">
          <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>  {{ Auth::user()->user }}</a>

	      <ul class="dropdown-menu" role="menu">
	        <li><a class="dropdown-item" href="{{ route('logout') }}"> Cerrar Sesión</a>
	      </ul>
  		</li>
@else

	      <li class="dropdown nav-item ">
          <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Usuario</a>

	      <ul class="dropdown-menu" role="menu">
	        <li><a class="dropdown-item" href="{{ route('login-get') }}"> Iniciar Sesion</a></li>
	        <li><a class="dropdown-item" href="{{ route('register-get') }}"> Registrar</a></li>
	      </ul>
  		</li>	

@endif
	
	
