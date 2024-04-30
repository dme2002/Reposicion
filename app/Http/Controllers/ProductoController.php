<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function Productos(){
        $producto = Producto::all();
        return view('homeProductos', compact('producto'));
    }

    public function crearProductos(){
        return view('crearProducto');
    }

    public function agregarProducto(Request $request){
        $nvoProducto = new Producto();
        $nvoProducto->descripcion = $request->input('descripcion');
        $nvoProducto->precio = $request->input('precio');
        $nvoProducto->stock = $request->input('stock');
        $nvoProducto->pagaIsv = true;
        $nvoProducto->save();

        $nvoProducto = Producto::all();
        return view('homeProductos');
    }

}
