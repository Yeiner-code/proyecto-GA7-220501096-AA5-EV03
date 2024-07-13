<?php

use App\Http\Controllers\Bibliotecacontroller;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\SaludoController;
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
Route::get('/saludo',[SaludoController::class,'saludito']);

route::resource('/cursos' ,CursoController::class);

Route::resource('/biblioteca' , Bibliotecacontroller::class);



