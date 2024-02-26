
    

    
    @extends('adminlte::page')
    
  

    @section('content')

    @section('title', 'Admin') 


    {{-- Agregamos una sesión mas, para usar los plugins de adminLTE --}}
    @section('plugins.Sweetalert2', true)
    {{-- ///////////////// --}}


    @section('content_header')
      
    @stop

    @section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<style>
  .body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    text-align: center;
    background-color: #ffffff;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  table, th, td {
    border: 1px solid #ccc;
  }
  th, td {
    padding: 8px;
    text-align: center;
  }
  th {
    background-color: #ffffff;
  }
  button {
    background-color: #1ca5bd;;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
  }
  button:hover {
    background-color: #1ca5bd;;
  }
</style>
<div class="body">
<img src="{{ asset('img/lo.png') }}" alt="Descripción de la imagen" width="200" height="200" position="center" >

<h2>Reporte de Datos de Temperatura y Humedad Corporal de los neonatales Porcinos</h2>

<!-- Botones para generar reportes -->


<!-- Calendario para seleccionar fechas -->
<label for="fecha_inicio">Fecha de Inicio:</label>
<input type="date" id="fecha_inicio">
<label for="fecha_fin">Fecha de Fin:</label>
<input type="date" id="fecha_fin">

<!-- Tabla de datos -->
<table>
  <thead>
    <tr>
      <th>Fecha y Hora</th>
      <th>Temperatura (°C)</th>
      <th>Humedad (%)</th>
    </tr>
  </thead>
  <tbody>
    <!-- Aquí irían los datos -->
    <tr>
      <td>2024-02-15 08:00:00</td>
      <td>25</td>
      <td>60</td>
    </tr>
    <tr>
        <td>2024-02-15 09:00:00</td>
        <td>25</td>
        <td>60</td>
      </tr>
      <tr>
        <td>2024-02-15 10:00:00</td>
        <td>26</td>
        <td>60</td>
      </tr>
      <tr>
        <td>2024-02-15 11:00:00</td>
        <td>25</td>
        <td>60</td>
      </tr>
      <tr>
        <td>2024-02-15 12:00:00</td>
        <td>25</td>
        <td>58</td>
      </tr>
      <tr>
        <td>2024-02-15 13:00:00</td>
        <td>26</td>
        <td>60</td>
      </tr>
      <tr>
        <td>2024-02-15 14:00:00</td>
        <td>25</td>
        <td>60</td>
      </tr>
     
    <!-- Agrega más filas según los datos -->
  </tbody>
</table>

<button onclick="generarReporte()">Generar Reporte PDF</button>
<br>
<!-- Incluir jQuery y jQuery UI -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Script para inicializar los datepickers -->
<script>
  $(function() {
    $("#fecha_inicio").datepicker({
      dateFormat: 'yy-mm-dd'
    });
    $("#fecha_fin").datepicker({
      dateFormat: 'yy-mm-dd'
    });
  });

  // Función para generar el reporte en PDF
  function generarReporte() {
    var fechaInicio = $("#fecha_inicio").val();
    var fechaFin = $("#fecha_fin").val();
    
    // Aquí iría la lógica para generar el reporte en PDF con las fechas seleccionadas
    alert('Se generará el reporte en PDF con las fechas seleccionadas: ' + fechaInicio + ' - ' + fechaFin);
  }
</script>

</div>
    
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        
    @stop
    


    {{-- con el operador cualesente nulo: Esta operación evalua una expresión
    @auth
    <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estás autenticado a la página<p>
    @endauth
        --}}
    
    
    