@extends('template.plantilla')

@section('titulo','Editar cliente')

@section('contenido')

    @include('template.navAdmin')

    {{$cliente}}


    <div class="container">
        <form class="needs-validation" method="post" action="{{route('cliente.update',$cliente->id)}}" novalidate readonly="readonly">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="validationCustom01" placeholder="nombre" value="{{$cliente->name}}" required pattern="[A-Za-z]+">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Apellidos</label>
                    <input type="text" name="apellido" class="form-control" id="validationCustom02" placeholder="apellido" value="{{$cliente->last_name}}" required pattern="[A-Za-z]+">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Cedula</label>
                    <input type="text" name="cedula" class="form-control" id="validationCustom04" placeholder="cedula" value="{{$cliente->cc}}" >
                    <div class="invalid-feedback">
                        Please provide a valid CC.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" id="validationCustom04" placeholder="Ciudad" value="{{$cliente->city}}" required pattern="[A-Za-z]+">
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="validationCustom05" placeholder="Dirección" value="{{$cliente->address}}" required>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Telefono</label>
                    <input type="text" name="telefono" class="form-control" id="validationCustom03" placeholder="telefono" value="{{$cliente->phone}}" required pattern="[0-9]+">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom06">Fecha nacimiento</label>
                    <input type="date" class="form-control" id="validationCustom06" name="fecha" max="2019-12-1" value="{{$cliente->birth}}" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Editar Cliente</button>
        </form>
        <br>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    @include('template.footer')
@endsection


