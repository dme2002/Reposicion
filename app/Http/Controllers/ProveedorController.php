<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function Proveedores(){
        $proveedor = Proveedor::all();
        return view('homeProveedores', compact('proveedor'));
    }

    public function crearProveedores(){
        return view('crearProveedor');
    }

    public function agregarProveedor(Request $request){
        $nvoProveedor = new Producto();
        $nvoProveedor->nombre = $request->input('nombre');
        $nvoProveedor->fechaRegistro = $request->input('fechaRegistro');
        $nvoProveedor->telefono = $request->input('telefono');
        $nvoProveedor->pagaIsv = true;
        $nvoProveedor->save();

        $nvoProveedor = Proveedor::all();
        return view('homeProveedores');
    }
}
