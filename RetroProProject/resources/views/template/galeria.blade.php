
@extends('template.plantilla2')

@section('titulo','Galeria')


@section('contenido2')

    @include('template.nav')
    <div class="container">
        <br>
        <h1 style=" color:#ffffff;">
            Galeria
        </h1>


        <div class="row">
            <div class="col-sm-4 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s2.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
            <div class="col-sm-4">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s1.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
            <div class="col-sm-4 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s3.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s4.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
            <div class="col-sm-4">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s5.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
            <div class="col-sm-4 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s6.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s7.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
            <div class="col-sm-4">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s8.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
            <div class="col-sm-4 ">
                <br>
                <div class="card bg-transparent border-success">
                    <img src="images\s9.jpg" class="card-img-top" height="300" alt="...">

                </div>
            </div>
        </div>
        <br>
    </div>

    @include('template.footer')

@endsection


