<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //

    public function index()
    {
        $productos = Producto::orderBy('id','ASC')->paginate();
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
}
