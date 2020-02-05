@extends('template.plantilla)

@section('titulo','RetroPro')

@section('contenido')

<nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #07041E">
    <a class="navbar-brand" href="#">
        <img src="images\logo.jpg" width="180 px" height="70 px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="#Servicios">Servicios</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="#">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-brand text-white" href="#">Contacto</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link navbar-brand text-white" href="#">Login</a>
            </li>

        </ul>
    </div>
</nav>

<div class="container">
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\slider\s1.jpeg" class="d-block w-100" alt="..." height="500 px">
            </div>
            <div class="carousel-item">
                <img src="images\slider\s2.jpg" class="d-block w-100" alt="..." height="500 px">
            </div>
            <div class="carousel-item">
                <img src="images\slider\s3.jpg" class="d-block w-100" alt="..." height="500 px">
            </div>
            <div class="carousel-item ">
                <img src="images\slider\s4.jpg" class="d-block w-100" alt="..." height="500 px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <br>
</div>
<div class="container" id="Servicios">
    <h3 class="text-white">Servicios</h3>
    <br>
    <div class="row">
        <div class="col-sm-6 ">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s2.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-transparent">
                    <h5 class="card-title text-white">Sonido Profesional</h5>
                    <p class="card-text text-white">Contamos con los equipos de audio originales de marcas reconocidas y de gama
                        alta, garantizando la calidad de nuestro servicio, también contamos con expertos para el manejo de los
                        equipos en su eventos.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">ILUMINACION</h5>
                    <p class="card-text text-white">Contamos con luces de todo tipo, cabezas robóticas, láser, strobes, paneles led,
                        par can led. Todo para hacer de su fiesta todo lo que siempre soñó.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">EFECTOS ESPECIALES</h5>
                    <p class="card-text text-white">Tenemos todo para hacer de su fiesta algo inolvidable,
                        cañones de papel (VENTURY), lanzallamas, cámaras de humo, máquinas de neblina o de burbujas,
                        cañón de CO2 (CRYOJET), pólvora fría.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">STAFF</h5>
                    <p class="card-text text-white">Contamos con personal capacitado para garantizar el buen desarrollo
                        de su evento, ingeniero de sonido, DJ’s, animadores, bailarinas y de más personal.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">INSTALACION DE SIS. DE SONIDO AMBIENTAL</h5>
                    <p class="card-text text-white">Realizamos el diseño, suministro e instalación de sistemas de
                        sonido ambiental para cualquier tipo de lugar.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">ASESORIA EN SONIDO PROFESIONAL </h5>
                    <p class="card-text text-white">Realizamos diseño, suministro e instalación de sistemas  de sonido profesional,
                        para discotecas, auditorios y demás espacios.</p>
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">MEDICION Y CALIBRACION</h5>
                    <p class="card-text text-white">Contamos con software especializado para realizar medición, análisis y
                        calibración de cualquier sistemas de audio profesional.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <br>
            <div class="card bg-transparent border-success">
                <img src="images\s1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-white">LUCES PARA DECORACION (AMBIENTAL)</h5>
                    <p class="card-text text-white">Contamos con luces para dar color a paredes, fachadas,
                        ponqués; solo dele rienda suelta a su imaginación y nosotros le pondremos color.</p>
                </div>
            </div>
        </div>
    </div>

    <br>
</div>

@include('template.footer')
@endsection




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
