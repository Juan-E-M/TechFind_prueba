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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categoria', function () {
    return App\Models\Categoria::ALL();
});
Route::get('/comentarionegocio', function () {
    return App\Models\Comentarionegocio::ALL();
});
Route::get('/comentarioproducto', function () {
    return App\Models\Comentarioproducto::ALL();
});
Route::get('/contacto', function () {
    return App\Models\Contacto::ALL();
});
Route::get('/detallenegocio', function () {
    return App\Models\Detallenegocio::ALL();
});
Route::get('/pegocio', function () {
    return App\Models\negocio::ALL();
});
Route::get('/producto', function () {
    return App\Models\Producto::ALL();
});
Route::get('/usuario', function () {
    return App\Models\Usuario::ALL();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

