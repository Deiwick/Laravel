@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2> 
            {{ $producto->nombre }} 
            <a href="{{ route ('Productos.index', $producto->id) }} " class="btn btn-default pull-right">Atras</a> 
        </h2>
        <p>{{ $producto->descripcion }}</p>

        <form method="POST" action="/Productos/{{ $producto->id }}"  role="form">
            
			<input name="_method" type="hidden" value="PUT">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto" value="{{ $producto->nombre}}">
            </div>

            <div class="form-group">
                <label for="nombre">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" placeholder="Nombre del producto" value="{{ $producto->stock}}">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control rounded-0" name="descripcion" id="descripcion" rows="3">{{ $producto->descripcion}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <div class="col-sm-4">
        chao cabros suscribanse
    </div>

    
@endsection