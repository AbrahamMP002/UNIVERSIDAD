<?php

include("conexion2.php");
$id=$_POST['id'];

$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$colonia = $_POST['colonia'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$sql = "UPDATE usuarios SET id = '$id', nombre = '$nombre', fecha = '$fecha', direccion = '$direccion', estado = '$estado', municipio = '$municipio', colonia = '$colonia', correo = '$correo', contraseña = '$contraseña' WHERE id = '$id' ";

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
        <a  href="../USUARIOS.php" >
          Regresar
       </a>
    </center>
<?php
      $conexion->close();
     ?>
