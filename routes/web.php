<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
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
     return view('logear');
 });  

 Route::get('home', function () {
    return view('reportes');
}); 


 Route::get('/registro', function(){
    return view('registrar');
}); 

Route::get('/parto', function(){
    return view('parto');
});

Route::get('/tempeA', function(){
    return view('tempAmb');
}); 

Route::get('/tempC', function(){
    return view('tempCorp');
});
Route::get('/neonatal', function(){
    return view('neonatal');
}); 

Route::get('/reporte1', function(){
    return view('reporteAmbi');
});
Route::get('/reporte2', function(){
    return view('reporteCamara');
}); 







Route::get('/registro', [RegisterController::class, 'show']);
Route::post('/registro', [RegisterController::class, 'registrocontrolador']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'logincontrolador']);

Route::get('/home', [HomeController::class, 'show']);

Route::get('/logout', [LogoutController::class, 'logout']);