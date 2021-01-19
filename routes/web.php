<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//portadas
Route::get('/', function () {
    return view('welcome');
});
//ruta de portada de inicio
Route::get('/derek', function () {
    return view('dashboard');
})->name('derek')->middleware('user.index');

//ruta creacion de usuarios
Route::get('/user',[UserController::class,'index'])->name('index')->middleware('permission:user.index');
Route::get('/usuarios',[UserController::class,'doke']);
Route::post('/dd',[UserController::class,'crea']);

//chat



//rutas ventas
Route::get('/site', function () {
    return view('ventas.admin');
})->name('admin')->middleware('permission:venta.index');

Route::get('/seguimiento', function () {
    return view('ventas.seguimiento');
})->name('seguimiento');

//rutas de venta con controlador
Route::get('/notifica',[VentaController::class,'ref'])->name('ref')->middleware('permission:venta.index');
Route::post('/notifica',[VentaController::class,'end'])->name('end')->middleware('permission:venta.create');
//ruta de cotizaciones
 Route::get('/cotizacion',[ AdminController::class,'cotizacion'])->name('cotiza');
 Route::post('/cotizacion',[ AdminController::class,'cotizaform'])->name('salida');
 Route::get('/cotizaci/{id}',[ AdminController::class, 'detalle'])->name('detalle');
Route::get('/detalle/{id}',[ AdminController::class, 'detallecotizacion'])->name('detalle2');






// rutas cotizaciones
Route::get('/dash',[ AdminController::class, 'grafico'])->name('grafica');
//rutas almacen

//ruta de piso instalaciones
Route::get('/prod', function () {
    return view('piso.registro');
})->name('prod')->middleware('permission:piso.index');


//ruta de piso de instalaciones
Route::get('/salidas', function () {
    return view('piso.salidas');
})->name('salidas')->middleware('permission:piso.index');



//RUTAS ALMACEN
Route::get('/almacen', function () {
    return view('almacen.registro');
})->name('salidas')->middleware('permission:almacen.index');

Route::get('/inventario', function () {
    return view('almacen.inventario');
})->name('salidas')->middleware('permission:almacen.index');

Route::get('/entradas', function () {
    return view('almacen.entradas');
})->name('entradas')->middleware('permission:almacen.index');




//compras administracion
Route::get('/compras', function () {
    return view('administracion.compras');
})->name('entradas')->middleware('permission:compras.index');

//controlador registro datos administracion
Route::get('/datos', function () {
    return view('administracion.registre');
})->name('reg')->middleware('permission:compras.index');


Route::get('/dato',[AdminController::class,'ser'])->name('regis');
Route::post('/dato',[AdminController::class,'regi'])->name('register');



//ruta de la tarjeta de notificaciones
Route::get('/MarkasRead', function () {
    auth()->user()->unreadNotifications->MarkasRead();
    return redirect()->back();
})->name('MarkasRead');

//ruta de notificaciones leer
Route::get('/leer',[VentaController::class, 'lerrnotificacion'])->name('mensa1');
Route::post('/mark-as-read',[VentaController::class, 'mensaje'])->name('mensa');
//rutas almacen




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('portada');
})->name('dashboard');
