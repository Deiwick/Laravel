@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2> 
            Listado de productos:
        </h2>
        <a href="{{ route ('Productos.create') }} " class="btn btn-default pull-right">Atras</a> 

        @include('productos.fragments.info')
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
                        <td> 
                            <a href="{{ route ('Productos.show', $producto->id) }} " class="btn btn-link">Ver</a> 
                        </td>
                        <td> 
                            <a href="{{ route ('Productos.edit', $producto->id) }}  " class="btn btn-link">Modificar</a> 
                        </td>
                        <td> 
                            <form action= "{{ route ('Productos.destroy', $producto->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-link">Borrar</button>
                            </form>
                        </td>
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