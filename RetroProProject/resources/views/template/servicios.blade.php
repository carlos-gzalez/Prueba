
@extends('template.plantilla2')

@section('titulo','Servicios')


@section('contenido2')

    @include('template.nav')
    <div class="container">
        <br>
        <h1 style=" color:#ffffff;">
            Servicios
        </h1>
    </div>
    <div class="container">
        <br>
    </div>
    <div class="container" id="Servicios">
        <br>
        <div class="row">
            <div class="col-sm-6 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s8.jpg" class="card-img-top" alt="...">
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
                    <img src="images\s7.jpg" class="card-img-top" alt="...">
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
                    <img src="images\s9.jpg" class="card-img-top" alt="...">
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
                    <img src="images\s2.jpg" class="card-img-top" alt="...">
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
                    <img src="images\s4.jpg" class="card-img-top" alt="...">
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
                    <img src="images\s8.jpg" class="card-img-top" alt="...">
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

