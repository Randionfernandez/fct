<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DatosEmpresaController;

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



//Route::view('/','home')->name('home');
Route::view('/','datosempresa');
Route::post('/', [DatosEmpresaController::class,'store']);

Route::view('/portfolio' ,'portfolio')->name('portfolio');
Route::view('/contact' ,'contact')->name('contact');
Route::view('/cacheadas', 'contact');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
