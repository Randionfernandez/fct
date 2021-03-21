<?php
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\TutorController;
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

Route::get('/', [TutorController::class, 'index']);

// cambio de idioma
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::resource('datosempresa', DatosEmpresaController::class);
Route::resource('tutores', TutorController::class)->parameters([
    'tutores' => 'tutor']);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
