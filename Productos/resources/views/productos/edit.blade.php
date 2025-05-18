@extends('layouts.miPlantilla')

@section('content')
    <h1>Editar Producto</h1>
    <!--URL para la ruta-->
    <form action="{{ route('productos.update', $producto) }}" method="POST"> <!--Crea un formulario para actualizar un producto existente-->
        @csrf
        @method('PUT') <!-- Método PUT para actualizar el recurso-->
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required>
        <textarea name="descripcion">{{ $producto->descripcion }}</textarea>
        <input type="text" name="precio_unitario" value="{{ $producto->precio_unitario }}" required pattern="\d+(\.\d{1,2})?">
        <input type="number" name="cantidad" value="{{ $producto->cantidad }}" required>
        <input type="text" name="categoria" value="{{ $producto->categoria }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
