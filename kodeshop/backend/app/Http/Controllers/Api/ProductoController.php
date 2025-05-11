<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
  
    public function index()
    {
        $producto = Producto::all();
        return $producto;
    }
   
    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        //Funcion guardar
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->img = $request->img;

        $producto ->save();
    }
    public function show(string $id)
    {       
        $producto = Producto::find($id);
        return $producto;
    }

    public function edit(string $id)
    {
        //
    }
   
    public function update(Request $request, string $id)
    {       
        $producto = Producto::findOrFail($request->id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->img = $request->img;

        $producto -> save();
    }

    public function destroy(string $id)
    {       
        $producto = Producto::destroy($id);
        return $producto;
    }
}
