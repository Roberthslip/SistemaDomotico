<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
     public function show(){
        //Para obtner algun valor de la base de datos en nuestra vista:
        //Auth::user()->username;
        return view('reportes');
    }
}