@extends('layouts.miPlantilla')

@section('content')
    <h1>Lista de Productos</h1>
    <button class="btn"><a href="{{ route('productos.create') }}">Agregar Producto</a></button>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Se utiliza un bucle foreach para iterar sobre la colección de productos -->
            <!-- mostrar listas de datos -->
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio_unitario }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>
                        <button class="btn"><a href="{{ route('productos.edit', $producto) }}">Editar</a></button>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection