<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



//Route::get('/', function() {
//    return redirect('/datosempresa/create');
//});
//Route::get('/',[App\Http\Controllers\DatosEmpresaController::class,'create']);
//Route::post('/',[App\Http\Controllers\DatosEmpresaController::class,'store']);

Route::get('/', 'DatosEmpresaController@create');
Route::resource('/datosempresa', DatosEmpresaController::class);

Route::resource('/tutores', TutoresController::class)->parameters(['tutores' => 'tutor'])->names(['create' => 'tutores.crear']);


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
