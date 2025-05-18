<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
Use App\Resources\views\index;
use App\Resources\views\create;
use App\Resources\views\edit;
use App\Resources\views\show;
use App\Resources\views\delete;

   class ProductoController extends Controller
   {
       public function index()
       {
           $productos = Producto::all();
           return view('productos.index', compact('productos'));
       }

       public function create()
       {
           return view('productos.create');
       }

       public function store(Request $request)
       //Valida los datos del formulario de creación de producto
{
    $request->validate([
        'nombre' => 'required|min:3',
        'precio_unitario' => 'required|numeric|min:0.01',
        'cantidad' => 'required|integer|min:0',
        'categoria' => 'required|string',
    ]);

    Producto::create($request->all());
    return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
}


public function update(Request $request, Producto $producto)
{
    $request->validate([
        'nombre' => 'required|min:3',
        'precio_unitario' => 'required|numeric|min:0.01',
        'cantidad' => 'required|integer|min:0',
        'categoria' => 'required|string',
    ]);

    $producto->update($request->all());
    return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
}

       public function edit(Producto $producto)
       {
           return view('productos.edit', compact('producto'));
       }

       public function destroy(Producto $producto)
       {
           $producto->delete();
           return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
       }
   }
   
