<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('VistaGeneral');
});

Route::get('/redireccionVistaProductos',[ProductoController::class,'productos'])->name("productos.general");


//Rutas de Productos
Route::get('/producto', [ProductoController::class, 'Productos'])->name("producto");
Route::get('/crearProducto', [ProductoController::class, 'crearProductos'])->name("producto.crear");
Route::post('/producto/agregar', [ProductoController::class, 'agregarProducto'])->name("producto.agregar");


//Rutas de Empleados
Route::get('/empleados', [EmpleadoController::class, 'Empleados'])->name("empleados");
Route::get('/empleado/agregar', [EmpleadoController::class, 'agregarEmpleado'])->name("empleado.agregar");
Route::post('/empleado/crear', [EmpleadoController::class, 'crearEmpleado'])->name("empleado.crear");

//Rutas de Proveedores
Route::get('/proveedores', [ProveedorController::class, 'Proveedores'])->name("empleados");
Route::get('/proveedor/agregar', [EmpleadoController::class, 'agregarEmpleado'])->name("empleado.agregar");
Route::post('/proveedor/crear', [EmpleadoController::class, 'crearEmpleado'])->name("empleado.crear");






