@extends('template.plantilla')

@section('titulo','Confirme eliminación de registro')

@section('contenido')
    @include('template.navAdmin')
    <div class="container">
        <h1>
            Reservaciones
        </h1>
    </div>

    <div class="container py-5">
        <h1>
            ¿Esta seguro de eliminar a {{$reservacion->id}} del cliente {{$reservacion->id_customer}}?
        </h1>
        <br>
        <form method="post" action="{{ route('reservacion.destroy',$reservacion->id) }}" >
            @method('DELETE')
            @csrf
            <button class="redondo btn btn-danger" type="submit">
                <i class="fas fa-trash-alt"></i>Eliminar
            </button>
            <a href="{{route('cancelar')}}" class="redondo btn btn-secondary" >
                <i class="fas fa-ban"></i>Cancelar
            </a>

        </form>
    </div>
    @include('template.footer')
@endsection

