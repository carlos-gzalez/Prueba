<nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #07041E">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images\logo.jpg') }}" width="180 px" height="70 px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="{{route('RetroPro.servicios')}}">Servicios</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="{{route('RetroPro.galeria')}}" >Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-brand text-white" href="{{route('RetroPro.contacto')}}">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-brand text-white" href="{{route('RetroPro.nosotros')}}">Nosotros</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="{{route('login')}}">Login</a>
            </li>

        </ul>
    </div>
</nav>
