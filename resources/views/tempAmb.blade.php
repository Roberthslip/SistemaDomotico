
    

    
        @extends('adminlte::page')
    
    
    
        @section('content')
    
        @section('title', 'Admin') 
    
    
        {{-- Agregamos una sesión mas, para usar los plugins de adminLTE --}}
        @section('plugins.Sweetalert2', true)
        {{-- ///////////////// --}}
    
     

        @section('content_header')
          
        @stop
    
        @section('content')
        <br> 
        <div class="clas">
        <h1>Medición de Temperatura y Humedad Ambiente del Hato Porcino</h1>
        <br>
        <div class="flex-wrapper">
            <div class="single-chart">
               
              <svg viewBox="0 0 36 36" class="circular-chart orange">
                <path class="circle-bg"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                />
                <path class="circle"
                  stroke-dasharray="30, 100"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                />
                <text x="18" y="20.35" class="percentage">30ºC</text>
              </svg>
              <h3>Temperatura</h3>
            </div>
            
            <div class="single-chart">
                
                
              <svg viewBox="0 0 36 36" class="circular-chart green">
                <path class="circle-bg"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                />
                <path class="circle"
                  stroke-dasharray="60, 100"
                  d="M18 2.0845
                    a 15.9155 15.9155 0 0 1 0 31.831
                    a 15.9155 15.9155 0 0 1 0 -31.831"
                />
                <text x="18" y="20.35" class="percentage">60%</text>
              </svg>
              <h3>Humedad</h3>
            </div>
          
            
          </div>
        </div>
        
        
        <div class="card" width="-10" height="-5">
            <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
            <h4 class="header-title mb-0">Estadistica Semanal</h4>
            <p>last week</p>
         
            
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <canvas id="myChart" width="-10" height="-5"></canvas>
            <script>
                // Datos de ejemplo para temperatura y humedad
                var datos = {
                    labels: ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                    datasets: [{
                        label: 'Temperatura (°C)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [35, 22, 23, 25, 40, 23, 22]
                    }, {
                        label: 'Humedad (%)',
                        borderColor: 'rgb(54, 162, 235)',
                        data: [60, 62, 25, 70, 68, 64, 62]
                    }]
                };
            
                // Configuración del gráfico
                var config = {
                    type: 'line',
                    data: datos,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                };
            
                // Crear el gráfico
                var myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                );
            </script>
            
            </div>
            </div>

            
        @stop
    
        @section('css')
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">
@stop
        @section('js')
            
        @stop
        
    
        
    
    
        {{-- con el operador cualesente nulo: Esta operación evalua una expresión
        @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estás autenticado a la página<p>
        @endauth
            --}}
        
        
        