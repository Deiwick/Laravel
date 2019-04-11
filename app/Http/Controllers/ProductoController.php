<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //

    public function index()
    {
        $productos = Producto::orderBy('id','DESC')->paginate();
        return view('productos.index',compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('productos.show',compact('producto'));
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        /// vuelve atras y muesta mensaje
        return back()->with('info','el producto ha sido eliminado');
    }

    public function edit( $id)
    {
        $producto = Producto::find($id);
        return view('productos.edit',compact('producto'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->save();
        
        $productos = Producto::orderBy('id','DESC')->paginate();
        return view('productos.index',compact('productos'))->with('info','el producto ha sido modificado');
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->save();

        return back()->with('info','el producto ha sido modificado');
    }
}
