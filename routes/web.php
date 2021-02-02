<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestController;

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
Route::get('/verpeticion', 'RequestController@verpeticion');

//Route::view('/','home')->name('home');
Route::view('/','datosempresa');
Route::view('/portfolio' ,'portfolio')->name('portfolio');
Route::view('/contact' ,'contact')->name('contact');
Route::view('/cacheadas', 'contact');
