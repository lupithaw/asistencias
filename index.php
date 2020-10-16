<?php
//da la conexion
include 'conexion.php';

 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Control de Asistencia</title>
   </head>
   <body>
     <!--estilos de bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <nav class="navbar navbar-light bg-light">
       <!--Crear la barra de navegacion-->
       <a class="navbar-brand">Navbar</a>
       <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
     </nav>

     <!--codigo para realizacion de login-->
     <section>
       <!--formulario para login con metodo post-->
       <form method="post" action="" name="signup-form">
           <div class="form-element-text-center">
               <label>** login **</label>
           </div>
           <div class="form-element">
               <label>Usuario</label>
               <input type="email" name="email" required />
           </div>
           <div class="form-element">
               <label>Contraseña</label>
               <input type="password" name="password" required />
           </div>
           <!--boton-->
           <button type="submit" name="register" value="register">Ingresar</button>
       </form>
     </section>

     <!--creacion de <footer></footer>-->
     <footer>
       <div class="card">
       <div class="card-header">
         Quote
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Arbeitapp le desea buen dia y una excelente bienvenida.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
     </footer>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   </body>
 </html>
