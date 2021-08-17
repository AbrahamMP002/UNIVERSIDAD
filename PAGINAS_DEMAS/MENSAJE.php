<?php 
  include("conexion2.php");
      if(isset($_GET['user'])){
      $sett=$_GET['user'];
  }
     ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
   <title>User Admin Atakear</title>
   <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   </head>
 <body>
   <div class="contenedor">

 <br><br>
 <center>
       <div class="contenido">
          <h1>Su pedido sea realizado</h1>
          <br>
          <h2>Puede recogerlo en nuestra sucursal, en un tiempo aproximado de 20 min.</h2>
          <br>
          <h2> ¡¡ Atakear un ataskon de sabor !! </h2>
          <br><br>
       </div>
           </div>
 <center>
 
 
  <a class="btn btn-success" href="../ATAKEAR_INICIO.php?user=<?php echo $sett ?>" >Regresar al Inicio</a>
 </center>

 </button>
 </center>
     <?php
       $conexion->close();
      ?>
 </body>
 </html>