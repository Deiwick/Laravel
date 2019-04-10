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
}
