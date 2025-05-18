@extends('layouts.miPlantilla')

@section('content')
    <h1>Agregar Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST"> <!--Crea un formulario para almacenar un nuevo producto/formulario que se envía a la ruta "productos.store"-->
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <textarea name="descripcion" placeholder="Descripción"></textarea>
        <input type="text" name="precio_unitario" placeholder="Precio Unitario" required pattern="\d+(\.\d{1,2})?">
        <input type="number" name="cantidad" placeholder="Cantidad" required>
        <input type="text" name="categoria" placeholder="Categoría" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
