@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2> 
            Listado de productos:
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td width="20px">ID</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Stock</td>
                    <td colspan="3">&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }} </td>
                        <td>{{ $producto->nombre }} </td>
                        <td>{{ $producto->descripcion }} </td>
                        <td>{{ $producto->stock }} </td>
                        <td> <a>Ver</a> </td>
                        <td> <a>Modificar</a> </td>
                        <td> <a>Borrar</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $productos->render() !!}
    </div>

    <div class="col-sm-4">
        chao cabros suscribanse
    </div>

@endsection