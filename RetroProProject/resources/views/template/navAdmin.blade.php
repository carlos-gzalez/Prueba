<div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #07041E">
        <a class="navbar-brand text-white" href="#">RetroPro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link navbar-brand text-white" href="{{route('cliente.index')}}">Clientes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand text-white" href="{{route('producto.index')}}">Articulos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand text-white" href={{route('provedor.index')}}>Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand text-white" href="#">Alquileres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-brand text-white" href="{{route('register')}}">Usuario</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link navbar-brand text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>


<br>
