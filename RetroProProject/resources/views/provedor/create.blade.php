@extends('template.plantilla')

@section('titulo','Nuevo Proveedor')

@section('contenido')

    @include('template.navAdmin')

    <div class="container">
        <form class="needs-validation" method="post" action="{{route('provedor.store')}}" novalidate>
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" name="nombre" class="form-control" pattern="[A-Za-z]+" id="validationCustom01" placeholder="nombre" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Ubicación</label>
                    <input type="text" name="ubicacion" class="form-control" id="validationCustom02" placeholder="Ubicacion" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Agregar Articulo</button>
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


