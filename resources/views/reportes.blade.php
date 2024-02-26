    

    
    @extends('adminlte::page')
    
    

    @section('content')


    @section('title', 'Admin') 


    {{-- Agregamos una sesión mas, para usar los plugins de adminLTE --}}
    @section('plugins.Sweetalert2', true)
    {{-- ///////////////// --}}

     
    @section('content_header')
       
    @stop

    @section('content')
   
        <img src="{{ asset('img/FOND.jpeg') }}" alt="Descripción de la imagen" width="1100" height="600" position="center" >
  
    


    
    @stop

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop

    @section('js')
        <script>
                Swal.fire(
            'Bienvenido!',
            'Sistema de Reporte Hato Porcino ESPAM MFL',
            'success'
            )
        </script>
    @stop
    

    


    {{-- con el operador cualesente nulo: Esta operación evalua una expresión
    @auth
    <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estás autenticado a la página<p>
    @endauth
        --}}
    