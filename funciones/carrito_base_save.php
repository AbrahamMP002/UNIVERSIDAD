<?php 
  include("conexion2.php");
   if(isset($_GET['user'])){
      $sett=$_GET['user'];
      $producto=$_GET['id'];

  }
     ?>
<?php 
  if(isset($_POST['cantidad'])){
      $cantidad=$_POST['cantidad'];
      } 
?> 
 <?php  
  include("conexion2.php");
  $resultado = $conexion ->query("select * from menu where id_productos='$producto'") or die($conexion -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
  $precio=$fila ['precio'];
  $nombre=$fila ['nombre'];
  }
  ?>
  <?php

   $total = $cantidad * $precio;

    ?>
<?php  
  include("conexion2.php");
  $sql= "insert into `pedido`(`id_pedido`,`id_productos`,`id`,`nombre`,`precio`,`cantidad`,`total`)";
  $sql.=" values ( null,'$producto','$sett','$nombre','$precio','$cantidad','$total'); ";

  $resultado =$conexion->query($sql);
  ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
   <title>User Admin Atakear</title>
   </head>
 <body>
   <div class="contenedor">

 <br><br>
 <center>
       <div class="contenido">
         <?php
           if($resultado){
             echo "<h2>Producto Agregado</h2>";
           } else {
             echo "Error".$conexion->error;
           }
         ?>
         <br><br>
       </div>
           </div>
 <center>
 
 <button class="btn btn-primary" value="Regresar">
  <a  href="../PAGINAS_DEMAS/MENU.php?user=<?php echo $sett ?>" >Regresar</a>
 </button>
 </center>

 </button>
 </center>
     <?php
       $conexion->close();
      ?>
 </body>
 </html>