<?php

include("conexion2.php");
$id_productos=$_POST['id_productos'];

$imagen=$_REQUEST["txtnom"];
$imagen=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="../cargadas/".$imagen;
copy($ruta,$destino);

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];

$sql = "UPDATE menu SET  id_productos = '$id_productos', imagen = '$destino', nombre = '$nombre', precio = '$precio', descripcion = '$descripcion' WHERE id_productos = '$id_productos' ";

$query = mysqli_query($conexion,$sql);


 ?>

 <?php
  if($query=== TRUE){
            echo "<center><h2>Usuario Modificado con Exito</h2></center>";

  
  } else {
            echo "Error".$conexion->error;
  }
  ?>
 <br><br>
      </div>
 <center>
    <button class="btn btn-primary col-6">
        <a  href="../PRODUCTOS.php" >
          Regresar
       </a>
    </center>
<?php
      $conexion->close();
     ?>
