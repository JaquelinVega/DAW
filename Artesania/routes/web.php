<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('index');});
Route::get('/practica', function () {return view('practica');});
Route::get('/producto/{id}', function ($id) {return view('verproducto')->with('id',$id);});


Route::get('/contacto', function(){
    $contacto='Maria Jaquelin';
    $valores=10;
    $color="#ccc";
    return view('contacto')->with('nombre',$contacto)
    ->with('fondo',$color)
    ->with('valores',$valores);
});


Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class,'index']);
    Route::get('/usuarios', [App\Http\Controllers\Admin\UsuariosController::class,'index']);
    Route::get('/productos', [App\Http\Controllers\Admin\ProductosController::class,'index']);
    Route::post('/productos/edit', [App\Http\Controllers\Admin\ProductosController::class,'edit']);
    Route::get('/categorias', function () { return view('admin.categorias'); });
    Route::resource('/productos',App\Http\Controllers\Admin\ProductosController::class);
    Route::resource('/usuarios',App\Http\Controllers\Admin\UsuariosController::class);

    Route::get('/clientes', [App\Http\Controllers\Admin\ClientesController::class,'index']);
    Route::get('/generarPDF', [App\Http\Controllers\Admin\ClientesController::class,'generar']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
