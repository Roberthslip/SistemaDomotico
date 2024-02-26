
    

    
        @extends('adminlte::page')
    
    
    
        @section('content')
    
        @section('title', 'Admin') 
    
    
        {{-- Agregamos una sesión mas, para usar los plugins de adminLTE --}}
        @section('plugins.Sweetalert2', true)
        {{-- ///////////////// --}}
    
     

        @section('content_header')
          
        @stop
    
        @section('content')

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 110px;
    margin: 0;
  }
  .container {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 800px;
    
  }
  h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
  }
  label {
    display: block;
    margin-bottom: 8px;
    color: #555;
  }
  input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
  }
  button {
    background-color: #1ca5bd;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
  }
  button:hover {
    background-color: #45a049;
  }
</style>
<br>
<div class="container">
    <h2>Registro de Partos Porcinos</h2>
  
    <form action="/guardar_parto" method="post">
      <label for="raza">Raza:</label>
      <input type="text" id="raza" name="raza" required>
  
      
      <label for="fecha_parto">Fecha de Parto:</label>
      <input type="date" id="fecha_parto" name="fecha_parto" required>
  
      <label for="hora_parto">Hora de Parto:</label>
      <input type="time" id="hora_parto" name="hora_parto" required>
  
      <label for="cerdos_nacidos">Numero de neonatales total Nacidos:</label>
      <input type="number" id="cerdos_nacidos" name="cerdos_nacidos" required>
  
      <label for="cerdos_vivos">Numero de neonatales Vivos:</label>
      <input type="number" id="cerdos_vivos" name="cerdos_vivos" required>
  
      <label for="cerdos_muertos">Numero de neonatales Muertos:</label>
      <input type="number" id="cerdos_muertos" name="cerdos_muertos" required>
  
      <label for="observacion">Observación:</label>
      <textarea id="observacion" name="observacion"></textarea>
  
      <button type="submit">Guardar Datos <i class="fas fa-save"></i></button>
    </form>
  </div>
  
  <script>
    document.getElementById('miFormulario').addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el envío del formulario
      // Aquí iría la lógica para enviar los datos a través de AJAX o lo que sea necesario
  
      // Mostrar mensaje con SweetAlert2
      Swal.fire(
        'Datos guardados correctamente',
        '',
        'success'
      );
    });
  </script>








        
        
     


       
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
        
        
        