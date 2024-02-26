<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    
 public function logout(){

     Session::flush(); //flush es un método para limpiar todo el flujo de nuestras sesiones, liberar todo lo que se tenga que liberar.

     Auth::logout();

     return redirect()->to('login');
 }
    

}
