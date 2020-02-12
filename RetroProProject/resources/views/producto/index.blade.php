@extends('template.plantilla')

@section('titulo','Producto')


@section('contenido')

    @include('template.navAdmin')

    <div class="container">
        <h1>
            Productos
        </h1>
    </div>

    @if(session('datos'))
        <br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('datos')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('cancelar'))
        <br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('cancelar')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="container">
        <div class="row  col-md-offset-2 custyle">
            <table class="table table-striped custab">
                <thead>
                <a href="{{route('producto.create')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Agregar Articulo</a>

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @foreach($producto as $productoitem)
                    <tr>
                        <td>{{$productoitem->id}}</td>
                        <td>{{$productoitem->name}}</td>
                        <td>{{$productoitem->brand}}</td>
                        <th>{{$productoitem->description}}</th>
                        <td>{{$productoitem->stock}}</td>
                        <td>{{$productoitem->cost}}</td>
                        <td class="text-center">
                            <a class='btn btn-info btn-xs' href="{{route('producto.edit',$productoitem->id)}}">
                            <span class="glyphicon glyphicon-edit">
                            </span> Edit
                            </a>
                            <a href="{{route('producto.confirm',$productoitem->id)}}" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove">
                            </span> Del
                            </a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
        {{$producto}}
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @include('template.footer')

@endsection
