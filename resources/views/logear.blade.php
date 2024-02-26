<!DOCTYPE html>
<html lang="en" class="container fondo">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Espam MFL</title>
    
     <link type="text/css" rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" href="../img/logo.jpg">
     <link rel="stylesheet" href="css/normalize.css">
  
   
     <script src="https://kit.fontawesome.com/c707bfa821.js" crossorigin="anonymous"></script>
</head>
<body >
  
   
  
    

     <section id="inicio">
          
        <div class="login">
          <br>
          
               <img class="img2" src="../img/lo.png" alt="Descripción de la imagen" >
     
<div>
           <form action="/login" method="POST">
            @csrf
           <input type="text" name="username" placeholder="username/email" style="width: 300px;">
           <input type="password" name="password" placeholder="password" style="width: 300px;">

           <br>
            <button  class="boton1" type="submit" name="boton-login"  >Iniciar sesión</button>{{--onclick="logearse()" --}}
           
             
            </form>

           
          <a href="#" style="color: rgb(3, 2, 7);"><p>¿olvidaste tu contraseña?</p></a>
         <div class="img">
          <img class="img" src="../img/HATO.jpg" alt="Descripción de la imagen">
</div>
        </div>
     </div>
     </section>

     <div class="bienvenida">
    <h1>¡Bienvenido a la web para el control de temperatura!</h1>
    <p>Visualiza y genera reportes de la temperatura ambiente del Hato porcino y la temperatura corporal de los neonatales.</p>
    <h2>¿Aún no tienes cuenta? <a href="/registro" style="color: rgb(171, 231, 233);">Regístrese aquí.</a></h2>
</div>

     <script type="text/javascript">
      function redirect(){
       window.location.href="https://www.facebook.com/"
      }
     </script>
        
   
     <script src="js/jquery.js"></script>
     <script src="js/funciones.js"></script>
</body>
</html>