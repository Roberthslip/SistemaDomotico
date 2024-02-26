<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LDAP\Result;

class LoginController extends Controller
{
    
  
   public function show(){
      if(Auth::check()){
         return redirect('/home');
      }
       return view('logear');
   }


//    METODO QUE LLAMAMOS DESDE LOGINrEQUEST,SIRVE   PARA AUTENTICARNOS
   public function logincontrolador(LoginRequest $request){
       
       $credentials = $request->getCredentials();
        //VER SI LOS VALORES DE LAS CREDENCIALES ESTAN EN LA BASE DE DATOS

       if(!Auth::validate($credentials)){
          return redirect()->to('/login')->withErrors('auth.failed');   
       }
       //Si las credenciales si pasan o si son validadas entonces: 
       
        //Vamos a crear un usuario apartir de la autenticación de las mismas
       //credenciales que estamos obteniendo de la solicitud http.
       $user = Auth::getProvider()->retrieveByCredentials($credentials);
       
       Auth::login($user);

       return $this->authenticated($request, $user);

    }
       
    public function authenticated(Request $request, $user){
        return redirect('/home');
    }

   }
