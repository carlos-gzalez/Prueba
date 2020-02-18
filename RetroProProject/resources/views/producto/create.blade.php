@extends('template.plantilla')

@section('titulo','Nuevo Articulo')

@section('contenido')

    @include('template.navAdmin')

    <div class="container">
        <form class="needs-validation" method="post" action="{{route('producto.store')}}" novalidate>
        @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="validationCustom01" pattern="[A-Za-z]+" placeholder="nombre" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Marca</label>
                    <input type="text" name="marca" class="form-control" id="validationCustom02" pattern="[A-Za-z]+" placeholder="marca" value="" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" id="validationCustom04"  placeholder="descripcion" required>
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom04">Stock</label>
                    <input type="text" name="stock" class="form-control" id="validationCustom04" pattern="[0-9]+" placeholder="stock" required>
                    <div class="invalid-feedback">
                        Please provide a valid Stock.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom05">Costo</label>
                    <input type="text" name="costo" class="form-control" id="validationCustom05" pattern="[0-9]+" placeholder="costo" required>
                    <div class="invalid-feedback">
                        Please provide a valid state.
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
                        if (form.checkValidity() === false ) {
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


