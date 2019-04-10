@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2> 
            {{ $producto->nombre }} 
            <a href="{{ route ('Productos.edit', $producto->id) }} " class="btn btn-default pull-right">Modificar</a> 
        </h2>
        <p>{{ $producto->descripcion }}</p>

    </div>

    <div class="col-sm-4">
        chao cabros suscribanse
    </div>

@endsection