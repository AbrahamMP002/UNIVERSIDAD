<?php

include("conexion2.php");
$id=$_POST['id'];

$imagen=$_REQUEST["txtnom"];
$imagen=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="../cargadas/".$imagen;
copy($ruta,$destino);

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];


$insertar="INSERT INTO menu VALUES('$id','$destino','$nombre','$precio','$descripcion')";

$query = mysqli_query($conexion,$insertar);


if($query){
;
}else{
echo "incorrecto";
}

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
           if($insertar){
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
  <a  href="../PRODUCTOS.php" >Regresar</a>
 </button>
 </center>

 </button>
 </center>
     <?php
       $conexion->close();
      ?>
 </body>
 </html>