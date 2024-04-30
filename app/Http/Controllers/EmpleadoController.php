<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function Empleados(){
        $producto = Producto::all();
        return view('homeEmpleados', compact('empleado'));
    }

    public function crearEmpleados(){
        return view('crearEmpleado');
    }

    public function agregarEmpleado(Request $request){
        $nvoEmpleado = new Empleado();
        $nvoEmpleado->nombre = $request->input('nombre');
        $nvoEmpleado->apellido = $request->input('apellido');
        $nvoEmpleado->fechaIngreso = $request->input('fechaingreso');
        $nvoEmpleado->salario = $request->input('salario');
        $nvoEmpleado->save();

        $nvoEmpleado = Empleado::all();
        return view('homeEmpleados');
    }

   
    }
    



   